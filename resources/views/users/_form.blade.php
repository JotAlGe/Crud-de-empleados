
    @csrf
    {{-- input name --}}
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Name:
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Name: Ex. Jane" name="name" value="{{ old('name', $user->name) }}">
      {{-- <p class="text-red-500/60">{{ $errors->first('name', ':message'); }}</p> --}}
    </div>
  </div>

  {{-- input hidden for id_level --}}
  <input type="hidden" name="id_level" value="2">
  <input type="hidden" name="profession_id" value="{{rand(1,3)}}">

  {{-- input lastname --}}
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Lastname
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" placeholder="Lastname: Ex. Doe" name="lastname" value="{{ old('lastname', $user->lastname) }}">
      {{-- <p class="text-red-500/60">{{ $errors->first('lastname', ':message'); }}</p> --}}
    </div>
  </div>

  {{-- input email --}}
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Email
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="email" placeholder="Email: Ex. jane@example.com" name="email" value="{{ old('email', $user->email) }}">
      {{-- <p class="text-red-500/60">{{ $errors->first('email', ':message'); }}</p> --}}
    </div>
  </div>

  {{-- input password --}}
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="*******************" name="password">
      {{-- <p class="text-red-500/60">{{ $errors->first('password', ':message'); }}</p> --}}
    </div>
</div>




