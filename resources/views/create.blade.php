<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<form action="/create" method="post" class="mt-10 grid place-content-center">
    @csrf
    <div class="flex flex-col">
        <label for="fullName">Full name:</label>
        <input type="text" id="fullName" class="pl-2 border-black" name="fullName">

        @error('fullName')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="my-5">
        <label for="gender">Gender: </label>
        <div class="flex flex-col">
            <p><input type="radio" name="gender" value="Male">Male</p>
            <p><input type="radio" name="gender" value="Female">Female</p>
            <p><input type="radio" name="gender" value="Other">Other</p>
        </div>

        @error('gender')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="flex flex-col my-5">
        <label for="address">Address</label>
        <input type="text" id="address" name="address">

        @error('address')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="flex flex-col my-5">
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone">

        @error('phone')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="py-2 px-3 bg-blue-300 rounded-md">Create</button>
</form>
