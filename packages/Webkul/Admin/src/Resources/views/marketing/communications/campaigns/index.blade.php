<x-admin::layouts>
    {{-- Title of the page --}}
    <x-slot:title>
        @lang('admin::app.marketing.communications.campaigns.index.title')
    </x-slot:title>

    <div class="flex gap-[16px] justify-between max-sm:flex-wrap">
        <p class="text-[20px] text-gray-800 font-bold">
            @lang('admin::app.marketing.communications.campaigns.index.title')
        </p>

        <div class="flex gap-x-[10px] items-center">
            @if (bouncer()->hasPermission('marketing.communications.campaigns.create'))
                <a href="{{ route('admin.marketing.communications.campaigns.create') }}">
                    <div class="primary-button">
                        @lang('admin::app.marketing.communications.campaigns.index.create-btn')
                    </div>
                </a>
            @endif
        </div>
    </div>

    <x-admin::datagrid src="{{ route('admin.marketing.communications.campaigns.index') }}"></x-admin::datagrid>
</x-admin::layouts>