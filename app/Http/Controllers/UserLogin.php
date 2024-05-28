<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserLogin extends Controller
{
    public function login()
    {

        //   session()->forget('user');

        return view('pages.login'); //->with('error', "Login details are not valid");
    }
    public function ADLogin(Request $req)
    {
        //dd($req);
        $ldapServer = 'ldap://SRVDC-01'; // Your AD server

        $ldapUser = $req->username;
        // $exist = $this->doesUserExistinTable($ldapUser); //  verific dc exista la noi in table, el poate fi in Ad , dar nu si in table



        $ldapPass = $req->password;
        $ldapConn = ldap_connect($ldapServer); //ma conectez la server

        ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapConn, LDAP_OPT_REFERRALS, 0);

        try {
            $ldapBind = ldap_bind($ldapConn, $ldapUser, $ldapPass); //incerc sa conectez userul in AD cu credentialele
        } catch (\Exception $e) {  //ldap_bind exception , dc folosesc  \ atunci vorbim de global namespace
            return back()->with("error", "  LDAP Bind Error: " . $e->getMessage()); // mesajul e prea tehnic , vreau ceva mai uman

        }
        if ($ldapBind) {
            //m-am conectat cu credentialele deci e OK 
            $exist = $this->doesUserExistinTable($ldapUser); //  verific dc exista la noi in table, el poate fi in Ad , dar nu si in table
            if (!$exist) {
                return back()->with("error", "Nu sinteti inrolat");
            }
            ldap_unbind($ldapConn); // Close the connection when done
        }
        return redirect('show-users');
    }
    function  doesUserExistinTable($ldapUser) // se verifica in tabelul nostru de useri
    {
        //we have a username , we need to find it in the users table
        $user = User::where('username', $ldapUser)->first(); //  username este de fapt un email in table

        if (!$user) {

            return false;
        } else {

            Auth::loginUsingId($user->id);  //  se poate si Auth::login($user) sau cu guard Auth::guard("admin")->login($user)

            // Check if the authentication was successful
            if (Auth::check()) {
                // Authentication successful, return success response
                $this->makeUserSession($user); //  aici fac sesiunea
            } else {
                // Authentication failed
                //  dd("failed");
            }

            return true;
        }
    }

    function customLogin($email)
    {
        // Check if the user exists in the database based on the email
        $user = User::where('email', $email)->first();

        if ($user) {
            // Authenticate the user using Auth::loginUsingId($id)
            Auth::loginUsingId($user->id);

            // Check if the authentication was successful
            if (Auth::check()) {
                // Authentication successful, return success response
                return response()->json(['message' => 'Authentication successful'], 200);
            } else {
                // Authentication failed
                return response()->json(['message' => 'Authentication failed'], 401);
            }
        } else {
            // User not found in the database
            return response()->json(['message' => 'User not found'], 404);
        }
    }


    function makeUserSession($user)
    {
        session(['user' => $user]);
    }
}
