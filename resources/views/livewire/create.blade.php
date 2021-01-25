<div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Name</label>
        <input type="text" wire:model="name" class="form-control input-sm @error('name') is-invalid @enderror"  placeholder="Name">
        @error('name')
            <smal class="invalid-feedback">{{ $message }}</smal>
        @enderror
    </div>
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" class="form-control input-sm @error('email') is-invalid @enderror" placeholder="Enter email" wire:model="email">
        @error('email')
        <smal class="invalid-feedback">{{ $message }}</smal>
        @enderror
    </div>
    <button wire:click="store()" class="btn btn-primary">Submit</button>
</div>
