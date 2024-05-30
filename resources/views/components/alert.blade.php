<div  wire:ignore.self>
    <a class="btn btn-primary trimite_email" data-bs-toggle="modal" data-bs-target="#convoacaModal{{$destinatar}}">
        Convoaca</a>

    <div class="modal fade" id="convoacaModal{{$destinatar}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    destinatar {{$destinatar}}

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form id="convoacaForm" action="{{route('adaugaconvocare')}}" method="post">
                        @csrf
                        <input type="hidden" name='destinatar' value="{{$destinatar}}">
                        <label for="appt">Ora de inceput:(hh:mm/AM/PM)</label>
                        <input class="form-control" type="time" id="appt" name="ora" >
                       
                        <span id="timeError"></span>


                        <label for="birthday">Data:</label>
                        <input class="form-control" type="date" id="birthday" name="data" ><br>
                        <span id="dataError"></span>
                        <label for="msg">Mesaj:</label>
                        <textarea id="msg" class="form-control form-group" name="mesaj" ></textarea><br>
                        <span id="mesajError"></span>


                        <button class="form-control"  id="convoacaUserCloseButton">Trimite</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


</div>