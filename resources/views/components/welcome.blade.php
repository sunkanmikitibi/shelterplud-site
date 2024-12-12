<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
       
    </h1>

    
</div>

 

 
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex">
            <form method="POST" action="{{ route('addproperty') }}">
                @csrf
                <div class="flex-auto">
                    <x-label for="title" value="{{ __('Title') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                </div>

                <div class="flex-1 w-64">
                    <x-label for="title" value="{{ __('Address') }}" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="property_address" :value="old('property_address')" required autofocus autocomplete="title" />
                </div>
            </form>
        </div>
 

       
    </div>

 
    

    
</div>
 
