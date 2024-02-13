@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit: ' . $author->name,
    'breadcrumbs' => [
        ['name' => 'Authors', 'href' => route('authors.index')],
        ['name' => 'Edit: ' . $author->name, 'href' => route('authors.edit', $author)],
    ],
])

@section('content')
    <div class="scroll height-content section-content">

        <form action="{{ route('authors.update', $author) }}" method="POST" class="text-gray-700 forma"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex flex-row ml-[30px]">
                <div class="w-[50%] mb-[150px]">

                    {{-- Name input --}}
                    @include('partials.inputs.text-input', [
                        'label' => 'Name',
                        'field_name' => 'name',
                        'placeholder' => 'Enter a name',
                        'value' => $author->name
                    ])

                    {{-- About input --}}
                    @include('partials.inputs.textarea-input', [
                        'label' => 'About',
                        'placeholder' => "Enter author's short biography",
                        'field_name' => 'about',
                        'value' => $author->about
                    ])
                </div>

                <div class="w-[50%] mb-[150px]">
                    {{-- Picure input --}}
                    @include('partials.inputs.picture-input', [
                        'model' => 'author',
                        'value' => $author->profilePicture
                    ])
                </div>

            </div>

            {{-- Buttons --}}
            @include('partials.custom.submit-cancel-buttons')

        </form>
    </div>
@endsection
