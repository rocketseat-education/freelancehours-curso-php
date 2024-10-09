<div>
    <button class="bg-[#5354FD] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-[#1f20a6] transition duration-300 ease-in-out"
        wire:click="$set('modal', true)">
        Enviar uma proposta
    </button>

    <x-ui.modal>
        <form class="flex flex-col gap-6" wire:submit="save">
            <div>
                <div class="text-[28px]">Envie sua proposta</div>
                <div class="text-[16px] text-[#C3C3D1]">Faça sua oferta em horas mensais que você pode contribuir com o projeto.</div>
            </div>
            <div class="flex gap-4">
                <div class="w-2/3 gap-2 flex flex-col">
                    <label class="text-[14px] text-[#C3C3D1]">E-mail</label>
                    <input wire:model="email" type="email" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Insira o seu e-mail" />
                    
                    @error('email')
                    <div class="text-red-600 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                <div class="w-1/3 gap-2 flex flex-col">
                    <label class="text-[14px] text-[#C3C3D1]">Horas</label>
                    <div class="flex" x-data="{ hours: @entangle('hours') }">
                        <button type="button" class="bg-[#1E1E2C] hover:bg-[#313145] transition duration-300 ease-in-out text-[#C3C3D1] py-2 px-3 text-3xl" @click="hours--">-</button>
                        <input wire:model="hours" type="number" class="bg-[#1E1E2C] text-white py-2 pl-3 w-[40px] font-bold focus:outline-none focus:ring-0 border border-[#1E1E2C] focus:ring-blue-500" />
                        <button type="button" class="bg-[#1E1E2C] hover:bg-[#313145] transition duration-300 ease-in-out text-[#C3C3D1] py-2 px-3 text-3xl" @click="hours++">+</button>
                    </div>

                    @error('hours')
                    <div class="text-red-600 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
            </div>
            <div>
                <label for="agree"
                    class="flex cursor-pointer items-center gap-2 text-sm font-medium text-neutral-600 dark:text-neutral-300 [&:has(input:checked)]:text-neutral-900 dark:[&:has(input:checked)]:text-white [&:has(input:disabled)]:opacity-75 [&:has(input:disabled)]:cursor-not-allowed">
                    <div class="relative flex items-center">
                        <input wire:model="agree" id="agree" type="checkbox"
                            class="before:content[''] peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-neutral-300 bg-neutral-50 before:absolute before:inset-0 checked:border-[#5354FD] checked:before:bg-[#5354FD] focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-neutral-800 checked:focus:outline-[#5354FD] active:outline-offset-0 disabled:cursor-not-allowed dark:border-neutral-700 dark:bg-neutral-900 dark:checked:border-[#5354FD] dark:checked:before:bg-[#5354FD] dark:focus:outline-neutral-300 dark:checked:focus:outline-[#5354FD]" />
                        <x-ui.icons.check class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-white peer-checked:visible dark:text-white" />
                    </div>
                    <span class="text-[#8C8C9A] text-[14px]">Concordo com os Termos e Políticas de privacidade.</span>
                </label>

                @error('agree')
                    <div class="text-red-600 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror


            </div>
            <button class="bg-[#5354FD] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-[#1f20a6] transition duration-300 ease-in-out w-full">
                Enviar uma proposta
            </button>
        </form>
        <div class="flex justify-center space-x-2">
            <x-ui.icons.secure class="w-6 h-6 text-[#5354FD]" />
            <span>Suas informações estão seguras.</span>
        </div>
    </x-ui.modal>
</div>