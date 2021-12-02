@foreach($prizes as $i => $prize)
    <div class="flex flex-col justify-center items-center font-bold text-gray-600 text-center group container">
        <h1 class="message text-4xl transform scale-0 origin-center transition-transform duration-500" style="transition-timing-function: cubic-bezier(0.18,0.89,0.32,1.28);">
            <span class="text-yellow-400 cursor-default">
                {{ $prize->name ?? null }}
            </span>
            <br>
            @if($prize->good_prize === 0)
                <span class="text-red-600 cursor-default">
                    {{ $prize->message ?? null }}
                </span>
            @else
                <span class="text-blue-600 cursor-default">
                    {{ $prize->message ?? null }}
                </span>
            @endif
        </h1>
        <x-door />
        <p class="cursor-default text-3xl group-hover:text-white">
            Door {{ $i + 1}}
        </p>
    </div>
@endforeach
