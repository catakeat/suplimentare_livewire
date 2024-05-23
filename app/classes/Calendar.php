<?php

namespace App\Classes;

use App;
use Illuminate\Support\Facades\DB;

class Calendar {
 // asta e afara din clasa in versiunea custom
    function convocati($current_date) {
       
        $query = "SELECT * FROM `messages` as m join users as u on m.destinatar=u.id WHERE  data='$current_date' ";// and m.sender='".$_SESSION['id']."')";
        $results = DB::select($query);
        $numar = count($results);
        $lista = "";
        $lista.= "<ul>";
        //$numar= mysqli_num_rows($result);
       foreach($results as $result){
            $lista.= "<li class='cellcontent-list'>" . $result->username . "</li>";
        }
        $lista.= "</ul>";
        
        return ['numar'=>$numar,'lista'=>$lista];
    }

    public function __construct($libere = 0, $month = null, $year = null) {

        // $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
        $this->naviHref = "calendar-show";
        $_GET['month'] = $month;
        $_GET['year'] = $year;
        $this->libere = $libere;
    }

    /*     * ******************* PROPERTY ******************* */

    //private $adresa= 'ajax/setDay.php';
    private $dayLabels = array("Lun", "Mar", "Mie", "Joi", "Vin", "Sâm", "Dum");
    private $currentYear = 0;
    private $currentMonth = 0;
    private $currentDay = 0;
    private $currentDate = null;
    private $daysInMonth = 0;
    private $naviHref = null;
    private $day_of_week = 0;
    private $libere = array();
    private $zile_acceptate = array();

    /*     * ******************* PUBLIC ********************* */

    /**
     * print out the calendar
     */
    public function show() {
        $year = null;

        $month = null;

        if (null == $year && isset($_GET['year'])) {

            $year = $_GET['year'];
        } else if (null == $year) {

            $year = date("Y", time());
        }

        if (null == $month && isset($_GET['month'])) {

            $month = $_GET['month'];
        } else if (null == $month) {

            $month = date("m", time());
        }

        $this->currentYear = $year;

        $this->currentMonth = $month;

        //testez
        //echo "anul ".$this->currentYear; echo "luna ".$this->currentMonth;




        $this->daysInMonth = $this->_daysInMonth($month, $year);

        $this->day_of_week = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));

        $content = '<table id="calendar_nou"  class="table .table-responsive" >' .
                '<tr>' .
                $this->_createNavi() .
                '</tr>' . $this->_createLabels() . '</tr>';

        $weeksInMonth = $this->_weeksInMonth($month, $year);

        // Create weeks in a month
        for ($i = 0; $i < $weeksInMonth; $i++) {
            $content .= "<tr>";
            //Create days in a week
            for ($j = 1; $j <= 7; $j++) {//pun aici si j ca si parametru la functie, care zi din saptamina
                $content .= $this->_showDay($i * 7 + $j, $j);
            }
        }
        $content .= "</tr></table>";
        return $content;
    }

    /*     * ******************* PRIVATE ********************* */

    /**
     * create the li element for ul
     */
    private function _showDay($cellNumber, $day_of_the_week_as_int) {

        if ($this->currentDay == 0) {
            $firstDayOfTheWeek = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-01'));
              if (intval($cellNumber) == intval($firstDayOfTheWeek)) {
                 $this->currentDay = 1;
            }
        }

        if (($this->currentDay != 0) && ($this->currentDay <= $this->daysInMonth)) {
            $this->currentDate = date('Y-m-d', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));
            $cellContent = $this->currentDay;
            $this->currentDay++;
        } else {
            $this->currentDate = null;
            $cellContent = null;
        }
        $cell = "";

        $current_date = date('Y-m-d');
        /*   $cellContent1="<ul class='cellcontent-list'><li>".$this->convocati($this->currentDate)."</li>"
          . "<li>data 2 </li>"
          . "</ul>"; */
        $array_returnat = $this->convocati($this->currentDate);//  returneaza un array format din citi sint in ziua respeciva si lista cu ei in format html
        $cellContent1 = $array_returnat['lista'];
        $numar_convocati = $array_returnat['numar'];
        
       // $windowFeatures = "'left=100px,top=100px,width=220,height=220'";//detaliile ferestrei popup
        //$windowFeatures = "left=100,top=100,width=320,height=320";
        $windowFeatures= "'width=500, height=500'";
        if ($numar_convocati > 0) {
            $working_content = "<td onclick=\"window.open('pe_zile?current_date=" . $this->currentDate . "', '',".$windowFeatures. ")\" class='working-day " . ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) .
                    ($cellContent == null ? 'mask' : '') . "'>" . $cellContent . $cellContent1 . "</td>";

            $not_working_content = "<td  onclick=\"window.open('pe_zile?current_date=" . $this->currentDate . "', '',". $windowFeatures . ")\" class='not-working-day " . ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) .
                    ($cellContent == null ? 'mask' : '') . "'>" . $cellContent . $cellContent1 . "</td>";
        } else {
            $working_content = "<td  class='working-day " . ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) .
                    ($cellContent == null ? 'mask' : '') . "'>" . $cellContent . $cellContent1 . "</td>";

            $not_working_content = "<td  class='not-working-day " . ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) .
                    ($cellContent == null ? 'mask' : '') . "'>" . $cellContent . $cellContent1 . "</td>";
        }
        
        //ca sa putem fada datele vechi , pun working si not-working  style
        if ($current_date < $this->currentDate) {

            switch ($day_of_the_week_as_int) {
                case 1:
                    $cell = $working_content;
                    break;
                case 2:
                    $cell = $working_content;
                    break;
                case 3:
                    $cell = $working_content;
                    break;
                case 4:
                    $cell = $working_content;
                    break;
                case 5: 
                    $cell = $working_content;
                    break;
                case 6:
                    $cell = $not_working_content;
                    break;
                case 7:
                    $cell = $not_working_content;
                    break;
            }
        } else {
               $cell = $not_working_content;
                   }
        
     return $cell;
    }

    /**
     * create navigation
     */
    private function _createNavi() {

        $nextMonth = $this->currentMonth == 12 ? 1 : intval($this->currentMonth) + 1;

        $nextYear = $this->currentMonth == 12 ? intval($this->currentYear) + 1 : $this->currentYear;

        $preMonth = $this->currentMonth == 1 ? 12 : intval($this->currentMonth) - 1;

        $preYear = $this->currentMonth == 1 ? intval($this->currentYear) - 1 : $this->currentYear;

        return
                '<td colspan="7" class="header">' .
                /*   '<span class="prev navigatie_calendar" >'.date('Y M',strtotime($this->currentYear.'-'.$preMonth)).'</span>'.
                  '<span class="title">' . date('Y M', strtotime($this->currentYear . '-' . $this->currentMonth . '-1')) . '</span>' .
                  '<span class="next navigatie_calendar" >'.date('Y M',strtotime($this->currentYear.'-'.$nextMonth)).'</span>'.
                 */
     ///  de aici am scos /* onclick="classic(this);return false;" */  in ambele fata de varianta custom
                '<a class="prev navigatie_calendar"   onclick="classic(this);return false;"   href="' . $this->naviHref . '?month=' . sprintf('%02d', $preMonth) . '&year=' . $preYear . '"> '
                . '<i class="fa fa-angle-double-left" style="font-size:48px;color:#2E6392"></i>'
                . '  </a>' .
                '<span class="big_title">' . date('Y M', strtotime($this->currentYear . '-' . $this->currentMonth . '-1')) . '</span>' .
                '<a class="next navigatie_calendar"  onclick="classic(this);return false;" href="' . $this->naviHref . '?month=' . sprintf("%02d", $nextMonth) . '&year=' . $nextYear . '"> '
                . '<i class="fa fa-angle-double-right" style="font-size:48px;color:#2E6392"></i>'
                . '  </a>' .
                '</td>';
    }

    /**
     * create calendar week labels
     */
    private function _createLabels() {

        $content = '<tr class="zilele_saptaminii">';

        foreach ($this->dayLabels as $index => $label) {

            $content .= '<td class="' . ($label == 6 ? 'end title' : 'start title') . ' ">' . $label . '</td>';
        }
        $content .= '</tr>';
        return $content;
    }

    /**
     * calculate number of weeks in a particular month
     */
    private function _weeksInMonth($month = null, $year = null) {

        if (null == ($year)) {
            $year = date("Y", time());
        }

        if (null == ($month)) {
            $month = date("m", time());
        }

        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month, $year);

        $numOfweeks = ($daysInMonths % 7 == 0 ? 0 : 1) + intval($daysInMonths / 7);

        $monthEndingDay = date('N', strtotime($year . '-' . $month . '-' . $daysInMonths));

        $monthStartDay = date('N', strtotime($year . '-' . $month . '-01'));

        if ($monthEndingDay < $monthStartDay) {

            $numOfweeks++;
        }

        return $numOfweeks;
    }

    /**
     * calculate number of days in a particular month
     */
    private function _daysInMonth($month = null, $year = null) {

        if (null == ($year))
            $year = date("Y", time());

        if (null == ($month))
            $month = date("m", time());

        return date('t', strtotime($year . '-' . $month . '-01'));
    }
}
