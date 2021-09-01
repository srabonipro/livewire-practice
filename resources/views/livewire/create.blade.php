<form class="mb-5">
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstname" wire:model="firstname">
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastname" wire:model="lastname">
    </div>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" wire:model="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone" wire:model="phone">
    </div>

    <button type="submit" class="btn btn-primary" wire:click.prevent="store()">Submit</button>
</form>
