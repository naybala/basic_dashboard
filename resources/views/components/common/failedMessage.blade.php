@if (Session::has('message'))
    <br>
    <div class="bg-red-500 border-l-4 border-red-500 text-white p-4" role="alert" id="validateDisapper">
        <ul>
            <li>{{ Session::get('message') }}</li>
        </ul>
    </div>
    <br>
@endif
