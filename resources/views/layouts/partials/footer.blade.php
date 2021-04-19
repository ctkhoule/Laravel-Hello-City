<footer>
    <p class="text-gray-400">
      &copy; Copyright {{ date('Y') }} 
      @if(!Route::is('apropos'))
      &middot; <a href="{{ route('apropos') }}" class="text-indigo-500 hover:text-indigo-600 underline">A propos</a> 
      @endif
    </p>
     
  </footer>