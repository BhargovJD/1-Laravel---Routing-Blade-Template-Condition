<h1>
    {{-- Name is: {{$id ?? "Unknown ID"}} --}}
</h1>

{{-- @if($id == "")
    {{"id is empty"}}
@elseif($id == "1")
    {{"id is 1"}}
@else
    {{"id is incorrect"}}
@endif --}}




{{-- @unless ($id=="1")
The id is not 1
@endunless --}}


{{-- @isset($id)
    {{$id}}
@endisset --}}



{{-- @for ($i=1;$i<10;$i++)
    <h2>
        {{$i}}
    </h2>

@endfor --}}





{{-- @php
    $i=1;
@endphp

@while ($i<=10)
    <h2>{{$i}}</h2>
    @php
        $i++;
    @endphp
@endwhile --}}




{{-- @php
    $arr = [1,2,3,4,5]
@endphp

@foreach ($arr as $x)
    <h2>{{$x}}</h2>
@endforeach --}}



{{-- @php
    $arr2 = ["A","B","C","D"]
@endphp
<select>
@foreach ($arr2 as $key=> $x)
    <option value="{{$key}}">{{$x}}</option>
@endforeach
</select> --}}



{{-- @for ($i=1;$i<=10;$i++)
        @if ($i==5)
            @continue
        @endif
    <h2>
        {{$i}}
    </h2>
@endfor --}}



@for ($i=1;$i<=10;$i++)
        @if ($i==5)
            @break
        @endif
    <h2>
        {{$i}}
    </h2>
@endfor
