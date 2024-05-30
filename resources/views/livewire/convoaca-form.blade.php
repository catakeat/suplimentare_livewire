<div>
<div>
    <!-- convoaca modal -->
    <a class="btn btn-primary trimite_email" data-bs-toggle="modal" data-bs-target="#convoacaModal" wire:click="alegeUser({{$destinatar}})">
        Convoaca</a>

</div>
<div wire:ignore.self class="modal fade" id="convoacaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="convoacaForm">
                    @csrf
                    <input type="hidden" name="id_user_convocat" id="id_user_convocat">
                    <label for="appt">Ora de inceput:(hh:mm/AM/PM)</label>
                    <input class="form-control" type="time" id="appt" name="ora" required wire:model="ora">
                    @error("ora") <span class="alert text-danger">{{$message}}</span> @enderror



                    <label for="birthday">Data:</label>
                    <input class="form-control" type="date" id="birthday" name="data" required wire:model="data"><br>
                    @error('data') <span class="text-danger">{{ $message }}</span> @enderror

                    <label for="msg">Mesaj:</label>
                    <textarea id="msg" class="form-control form-group" name="mesaj" required wire:model="mesaj"></textarea><br>
                    @error('mesaj') <span class="text-danger">{{ $message }}</span> @enderror




                    <button class="form-control" id="convoacaUserCloseButton" wire:click.prevent="convoacaUser">Trimite</button>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

</div>