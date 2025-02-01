<x-mail::message>
    Congrats Your Tickets are Booked Successfully
    <x-mail::button :url="config('app.url').'/seat/details/'.$ref_no">
        Seat Layout
    </x-mail::button>
    <x-mail::button :url="config('app.url').'/book/details/'.$ref_no">
    Book Details
    </x-mail::button>
</x-mail::message>