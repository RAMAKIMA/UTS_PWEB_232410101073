@extends('layouts.app')

@section('content')
<div class="h-[70vh] overflow-hidden flex items-center justify-center bg-gray-100 mt-2">
  <div class="bg-white p-6 sm:p-8 rounded shadow-md w-full max-w-sm">
    <h2 class="text-2xl font-bold mb-4 text-center text-green-500">Login</h2>

    <form action="/dashboard" method="GET" class="space-y-4">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username<span class="text-red-600">*</span></label>
        <input type="text" name="username" placeholder="Username" id="username" required
          class="mt-1 block w-full px-3 py-0.5 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password<span class="text-red-600">*</span></label>
        <input type="password" name="password" placeholder="Password" id="password" required
          class="mt-1 block w-full px-3 py-0.5 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <button type="submit"
        class="w-full font-semibold bg-green-500 text-white py-1 px-4 rounded hover:bg-green-700 transition duration-200">
        Login
      </button>
    </form>
  </div>
</div>
@endsection
