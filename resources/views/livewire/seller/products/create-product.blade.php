<div class="border rounded-md px-6">
    <form action="" class="space-y-3 py-4" enctype="multipart/form-data">
        <h1 class="text-2xl font-bold text-gray-900">{{ __('Create Product') }}</h1>

        <div class="flex w-full space-x-3">
            <div class="flex flex-col w-6/12 space-y-3 py-3 px-3">

                <input type="text" class="py-2 border rounded-md px-3" placeholder="Product Name">

                <div class="flex space-x-3">
                    <select class="py-2 border rounded-md px-3 w-6/12">
                        <option selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                            <option class="text-black" value="{{ $category->id }}">{{ ucwords($category->type) }}</option>
                        @endforeach
                    </select>

                    <select wire:model="variation" class="py-2 border rounded-md px-3 w-6/12">
                        <option selected>Select Variation</option>
                        <option class="text-black" value="Dress">{{ __('Dress') }}</option>
                        <option class="text-black" value="Tops">{{ __('Tops') }}</option>
                        <option class="text-black" value="Bottoms">{{ __('Bottoms') }}</option>
                        <option class="text-black" value="Shoes">{{ __('Shoes') }}</option>
                        <option class="text-black" value="Bags">{{ __('Bags') }}</option>
                    </select>
                </div>

                @if($variation == 'Dress' || $variation == 'Tops' || $variation == 'Bottoms' )
                    <h2 class="text-md">Measurement</h2>
                    <div class="flex space-x-2">
                        <div class="flex flex-col w-6/12 space-y-1">
                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Shoulder (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Length (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3"
                            placeholder="Sleeve Length (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Bust (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Waist Size (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Hip Size (cm)">

                        </div>

                        <div class="flex flex-col w-6/12 space-y-1">
                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Cuff (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Bicep Length (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Belt Length (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Thigh (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Inseam (cm)">
                        </div>
                    </div>

                @elseif ($variation == 'Shoes')
                    <h2 class="text-md">Measurement</h2>
                    <div class="flex space-x-2">
                        <div class="flex flex-col w-6/12 space-y-1">
                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Ball Girth (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Foot Length (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3"
                            placeholder="Heel Height (cm)">
                        </div>

                        <div class="flex flex-col w-6/12 space-y-1">
                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Shoes Inner Length (cm)">

                            <input type="text" class="text-sm py-1 border rounded-md px-3" placeholder="Platform Height (cm)">
                        </div>
                    </div>
                @endif
            </div>

            <div class="flex flex-col w-6/12 space-y-3 py-3 px-3">
                <input type="text" class="py-2 border rounded-md px-3" placeholder="Description">

                <input type="text" class="py-2 border rounded-md px-3" placeholder="SKU">

                <input type="text" class="py-2 border rounded-md px-3" placeholder="Qty">

                <input type="text" class="py-2 border rounded-md px-3" placeholder="Price">

                <div class="space-y-1">
                    <h2>Photos</h2>
                    <div class="flex space-x-2 w-full">
                        @foreach ($images as $image)
                            <img class="border w-16 h-16 rounded-md" src="{{ $image }}" alt="">
                        @endforeach

                        @if (count($images) <= 5)
                            <label for="image" class="cursor-pointer">
                                <svg class="py-4 px-4 border border-solid w-16 rounded-md" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </label>

                            <input type="file" class="py-2 border rounded-md" id="image"
                            wire:change="$emit('fileUpload')" multiple style="display: none">
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <button type="button" wire:click="$emit('closeModal')" class="rounded-md shadow-lg py-2 px-5 text-white text-sm bg-blue-700 hover:bg-blue-600">
            Close
        </button>
    </form>
    @once
        @push('scripts')
            <script>
                window.livewire.on('fileUpload', () => {

                    let image = document.getElementById('image');

                    for(let i=0; i<image.files.length; i++){
                        let file = image.files[i];

                        let reader = new FileReader();

                        reader.onloadend = () => {

                            window.livewire.emit('fileUploaded', reader.result)
                        }

                        reader.readAsDataURL(file);
                    }
                })
            </script>
        @endpush
    @endonce
</div>


