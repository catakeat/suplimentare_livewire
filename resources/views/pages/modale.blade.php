<!-- Modal  sterge-->
<div class="modal fade" wire:ignore.self id="stergeModal" tabindex="-1" aria-labelledby="stergeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sterge user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Stergere ireversibila
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="stergeUser">Sterge</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adaugaUser">
  User nou
</button>



<!-- Modal -->
<div wire:ignore.self class="modal fade" wire:ignore.self id="editeazaModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editeaza user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form>
          <label for="email">Adresa email:</label>
          <input class="form-control" type="email" name="username" wire:model="username" id="email" required>
          @error("username")<p> <span class="alert text-danger">{{$message}}</span></p> @enderror


          <label for="entitate">Entitate(birou/serviciu):</label>

          <select class="form-select  form-control" id="entitate_id" name="entitate" wire:model="entitate" required>

            <option>Alegeti</option>
            <?php
            foreach ($entitati as $entitate) {
            ?>

              <option value="<?php echo $entitate->id;  ?>"> <?php echo $entitate->nume; ?></option>
            <?php
            }
            ?>
          </select><br>
          @error('entitate') <p> <span class="alert text-danger">{{$message}}</span></p> @enderror
          <button class="form-control" id="convoacaUserCloseButton" wire:click.prevent="modificaUser">Trimite</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- adauga modal -->
<div wire:ignore.self class="modal fade" id="adaugaUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Adauga user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span id="user-id" class="user-id">user id</span>
        <form>


          <label for="email">Adresa email:</label>
          <input class="form-control" type="email" name="username" wire:model="username" id="email" required>
          @error("username")<p> <span class="alert text-danger">{{$message}}</span></p> @enderror


          <label for="entitate">Entitate(birou/serviciu):</label>

          <select class="form-select  form-control" id="entitate_id" name="entitate" wire:model="entitate" required>

            <option>Alegeti</option>
            <?php
            foreach ($entitati as $entitate) {
            ?>

              <option value="<?php echo $entitate->id;  ?>"> <?php echo $entitate->nume; ?></option>
            <?php
            }
            ?>
          </select><br>
          @error('entitate') <p> <span class="alert text-danger">{{$message}}</span></p> @enderror
          <button class="form-control" id="convoacaUserCloseButton" wire:click.prevent="adaugaUser">Trimite</button>
        </form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div wire:ignore.self class="modal fade" id="convoacaModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     {{$destinatar}}
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