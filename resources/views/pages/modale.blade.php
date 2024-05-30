<!-- Modal  sterge-->
<div class="modal fade" wire:ignore.self id="stergeModal" tabindex="-1" aria-labelledby="stergeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sterge user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="stergeUser">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adaugaUser">
  User nou
</button>



<!-- Modal -->
<div class="modal fade" wire:ignore.self id="editeazaModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editeaza user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="stergeUser">Save changes</button>
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
          <input class="form-control" type="email" name="username" id="email" required>



          <label for="entitate">Entitate(birou/serviciu):</label>

          <select class="form-select  form-control " id="entitate_id" name="entitate">
            <!--  <option>Alegeti</option>-->
            <?php
            foreach ($entitati as $entitate) {
            ?>

              <option value="<?php echo $entitate->id;  ?>"> <?php echo $entitate->nume; ?></option>
            <?php
            }
            ?>
          </select><br>

          <button class="form-control" data-bs-dismiss="modal" id="convoacaUserCloseButton" type="submit">Trimite</button>
        </form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
