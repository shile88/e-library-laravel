<div class="mt-[20px]">
    <p>{{ $label }}<span class="text-red-500">*</span></p>
    <select x-cloak id="kategorija" required multiple name="{{ $resourcePlural }}[]" placeholder="{{ $placeholder }}"
        class="w-[90%] mt-2 focus:outline-none multiple-select">
        @foreach ($items as $item)
            <option @if (old($resourcePlural) and in_array($item->id, old($resourcePlural)))
                 selected @endif value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach
    </select>
    
    @if ($errors->first($resourcePlural))
        <p class="text-red-600">{{ $errors->first($resourcePlural) }}</p>
    @endif

    <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col w-[90%]">
        <input name="values" id="kategorijaInput" type="hidden"
            x-bind:value="selectedValues()">
        <div class="relative inline-block w-[100%]">
            <div class="relative flex flex-col items-center">
                <div x-on:click="open" class="w-full svelte-1l8159u">
                    <div class="flex p-1 my-2 bg-white border border-gray-300 shadow-sm svelte-1l8159u focus-within:ring-2 focus-within:ring-[#576cdf]"
                        onclick="clearErrorsKategorija()">
                        <div class="flex flex-wrap flex-auto">
                            <template x-for="(option,index) in selected"
                                :key="options[option].value">
                                <div
                                    class="flex items-center justify-center px-[6px] py-[2px] m-1 text-blue-800 bg-blue-200 rounded-[10px] ">
                                    <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                        options[option] x-text="options[option].text"></div>
                                    <div class="flex flex-row-reverse flex-auto">
                                        <div x-on:click="remove(index,option)">
                                            <svg class="w-6 h-6 fill-current " role="button"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </template>
                        <div x-show="selected.length    == 0" class="flex-1">
                            <input
                                class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none"
                                x-bind:value="selectedValues()">
                        </div>
                    </div>
                    <div
                        class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 svelte-1l8159u">
                        <button type="button" x-show="isOpen() === true" x-on:click="open"
                            class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                            <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]"
                                viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                L17.418,6.109z" />
                            </svg>
                        </button>
                        <button type="button" x-show="isOpen() === false" @click="close"
                            class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                            <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]"
                                viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                L17.418,6.109z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div x-show.transition.origin.top="isOpen()"
                    class="z-40 w-full overflow-y-auto bg-white rounded shadow max-h-select svelte-5uyqqj"
                    x-on:click.away="close">
                    <div class="flex flex-col w-full">
                        <template x-for="(option,index) in options" :key="option">
                            <div>
                                <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-teal-100"
                                    @click="select(index,$event)">
                                    <div x-bind:class="option.selected ? 'border-teal-600' : ''"
                                        class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                        <div class="flex items-center w-full">
                                            <div class="mx-2 leading-6" x-model="option"
                                                x-text="option.text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>