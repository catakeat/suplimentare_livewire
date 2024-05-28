<div wire:ignore.self class="modal fade" id="convoacaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
 {{$test}}
                <form action="#" method="POST" id="convoacaForm">
                    @csrf
                    <input type="hidden" name="id_user_convocat" id="id_user_convocat">
                    <label for="appt">Ora de inceput:(hh:mm/AM/PM)</label>
                    <input class="form-control" type="time" id="appt" name="ora" required>
                    <span id="timeError"></span>


                    <label for="birthday">Data:</label>
                    <input class="form-control" type="date" id="birthday" name="data" required><br>
                    <span id="dataError"></span>
                    <label for="msg">Mesaj:</label>
                    <textarea id="msg" class="form-control form-group" name="mesaj" required></textarea><br>
                    <span id="mesajError"></span>



                    <button class="form-control" data-bs-dismiss="modal" id="convoacaUserCloseButton" wire:click="convoacaUser">Trimite</button>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>