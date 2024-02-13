<div class="mt-[20px]">
    <p>Add a photo</p>

    {{-- Image input --}}
    <input type="file" id="image-upload-input" name="picture" accept="image/*" class="shadow-md w-[360px]"
        onchange="loadUploadedImage(event, '{{ $model }}')" />

    {{-- Image output --}}
    <img id="image-upload-output" width="360" class="mt-[20px] p-2 border-2 border-gray-300" alt="Picture"
        src="{{ isset($value) ? getPicturePath($value) :
            ($model == 'book' ? getDefaultBookPicturePath() : getDefaultUserPicturePath()) }}"
        onerror="this.onerror=null;
        this.src='{{$model == 'book' ? getDefaultBookPicturePath() : getDefaultUserPicturePath() }}'" />


    {{-- Remove image button --}}
    <h5 class="shadow-lg mt-2 py-2 text-white px-5 w-[150px] text-sm bg-[#F44336] rounded-[5px] cursor-pointer"
        onclick="removeUploadedImage(event, '{{ $model }}')">Remove picture</h5>

    {{-- Shows errors --}}
    @if ($errors->first('picture'))
        <p class="text-red-600 mt-[5px]">{{ $errors->first('picture') }}</p>
    @endif

</div>
