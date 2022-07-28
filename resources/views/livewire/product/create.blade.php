<div>
    <form class="row g-3 mt-3" wire:submit.prevent="submit">
        <div class="col-12">
            <label for="inputAddress" class="form-label">Nama Produk</label>
            <input type="text" wire:model="name_product" class="form-control @error('name_product') is-invalid @enderror" id="inputAddress" placeholder="Contoh: Baju Lengan Panjang" required>
            @error('name_product') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Kode Produk</label>
            <input type="text" wire:model=code_product class="form-control" id="inputEmail4" placeholder="Contoh: BLP1234">
            @error('code_product') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Harga Produk</label>
            <input type="number" wire:model="price" class="form-control" id="inputPassword4" min="1" required>
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col-12 pt-2">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
    </form>
</div>
