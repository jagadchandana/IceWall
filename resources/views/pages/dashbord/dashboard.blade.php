<x-layouts.app-layout>
    <x-slot name="page">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Notification -->
                    <div class="col-span-12 mt-6 -mb-6 intro-y">
                        <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                            <span>Introducing new dashboard! Download now at <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">themeforest.net</a>.</span>
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.app-layout>