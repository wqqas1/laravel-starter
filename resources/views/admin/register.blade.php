@extends('admin.layouts.app', [
	'pageName' => 'Register'
])

@section('content')

	<!-- Register Form -->
	<section class="p-6 md:p-8 mt-16 font-hairline flex flex-col items-center justify-center">
		<div class="brand mb-6">
			<svg class="h-8" viewBox="0 0 1839.49 280"><rect width="280" height="280" rx="15.61" fill="#ff4800"/><path d="M681.38,601.39a26.61,26.61,0,0,0,7.21-1.66l5,30.78a70.79,70.79,0,0,1-27.73,5.54c-24.68,0-37.43-15-33.55-43.26l23.57-167.21,43.54-4.71L675.56,591.13C674.45,598.89,676.67,601.39,681.38,601.39Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M852.75,494.91l-14.14,94.28a54.5,54.5,0,0,0-.56,6.1c0,6.93,2.78,9.7,7.77,11.65l-12.2,28.28c-16.36-1.39-30-8.6-34.11-24.4-10.26,14.69-24.4,25.23-43.54,25.23-31.89,0-48.25-23-48.25-58.51,0-42.15,22.19-98.16,84.58-98.16A125,125,0,0,1,852.75,494.91ZM752.37,577.26c0,20.8,7.21,26.63,16.91,26.63,10.54,0,19.41-7.77,27.73-20.52l10.54-70.16a45.1,45.1,0,0,0-16.36-2.77C762.35,510.44,752.37,548.7,752.37,577.26Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M979.75,482.15,967.27,524.3c-4.44-1.11-7.76-1.94-12.2-1.94-18.3,0-28.28,17.47-36.33,40.76L909,631.34h-43l20.52-147.25H924l-.55,27.46c10-20.25,26.34-31.62,41.59-31.62A48.29,48.29,0,0,1,979.75,482.15Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1045.46,601.11a33.09,33.09,0,0,0,16.64-4.71l11.65,28.84a85.26,85.26,0,0,1-40.49,10.81c-32.44-.28-45.75-19.13-41-53.52l9.71-67.93H981.69l4.16-30.51H1008l9.15-32.72,37.16-4.16-5.27,36.88h33.28l-8.6,30.51h-28.84l-9.43,67.93C1033.54,596.68,1036.87,601.11,1045.46,601.11Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1086.23,631.34l20.52-147.25H1150l-20.52,147.25Zm74.87-198.82c-1.95,13.58-13.31,23.84-28.29,23.84-15.25,0-24.4-11.37-22.46-25.79a28.16,28.16,0,0,1,28-24.12C1153.89,406.45,1163,417.82,1161.1,432.52Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1285.6,498.24l-19.41,24.4c-9.43-8-22.74-11.93-33.83-11.93-13.59,0-20,4.44-20,11.93,0,7.76,5.82,10.26,28.28,17.47,25,8,38.27,21.35,38.27,44.92,0,27.17-20.24,51-66,51-26.34,0-48.53-10.26-61.28-24.12l22.46-23.3A54.91,54.91,0,0,0,1213,604.72c15.81,0,23-6.66,23-14.7,0-9.7-5.83-12.48-29.12-20.52-24.68-8.32-37.43-22.18-37.43-43,0-25,21.62-47.14,62.94-47.14C1252.33,479.38,1273.12,486.87,1285.6,498.24Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1439.78,494.91l-14.14,94.28a54.5,54.5,0,0,0-.56,6.1c0,6.93,2.77,9.7,7.77,11.65l-12.21,28.28c-16.36-1.39-29.94-8.6-34.1-24.4-10.26,14.69-24.41,25.23-43.54,25.23-31.89,0-48.25-23-48.25-58.51,0-42.15,22.19-98.16,84.58-98.16A125,125,0,0,1,1439.78,494.91ZM1339.4,577.26c0,20.8,7.21,26.63,16.91,26.63,10.54,0,19.41-7.77,27.73-20.52l10.54-70.16a45.1,45.1,0,0,0-16.36-2.77C1349.38,510.44,1339.4,548.7,1339.4,577.26Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1593.12,524.3l-15,107h-43.26L1549.31,534c2.49-15.53-2.22-18.86-9.71-18.86-10,0-21.63,14.42-32.16,35.22l-11.37,81h-43l20.52-147.25H1511l-.83,25.79c12.48-18.3,31.89-30.5,49.36-30.5C1584,479.38,1597,496.29,1593.12,524.3Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1654.12,608.32c0,15-12.75,27.73-27.45,27.73-13,0-22.18-10-22.18-22.74,0-14.42,13-27.45,27.73-27.45C1645,585.86,1654.12,595.84,1654.12,608.32Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1804.42,631.34h-38.27l.28-21.08c-9.43,14.15-23.85,25.79-43.81,25.79-31.34,0-46.31-22.46-46.31-59.34,0-40.21,18.58-97.33,71.82-97.33a43.09,43.09,0,0,1,32.16,14.14l10.26-72.65,42.71,4.71ZM1721,577c0,20.8,6.66,26.9,16.36,26.9,12.2,0,22.46-12.48,31.34-27.18l7.76-54.63c-5.27-7.21-11.09-10.81-20.24-10.81C1728.72,511.27,1721,552.59,1721,577Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1881.23,577.82c1.11,19.69,11.92,26.07,26.34,26.07,12.48,0,23.85-4.44,37.44-13.59l15.53,26.06c-16.09,11.65-35.78,19.69-58.51,19.69-43,0-64.06-25-64.06-62.39,0-39.93,21.63-94.28,83.47-94.28,35.77,0,54.35,18,54.35,40.21C1975.79,560.9,1927.54,573.11,1881.23,577.82Zm51-55.74c0-6.65-3.33-13.58-15-13.58-20.52,0-30.23,21.62-34.11,42.7C1920.05,548.43,1932.25,534.56,1932.25,522.08Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M2010.45,631.34l-25.79-147.25H2031l10,114,41.32-114h45.47L2062.3,631.34Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M403,549.34c-3,14-4.78,27.17-4.78,38.22,0,17.92,4.78,29.86,17.32,29.86,7.46,0,11.05-3.88,19.41-3.88,5.08,0,6.27,2.09,6.27,7.47,0,14-23,24.78-40,24.78-32.55,0-45.69-25.08-45.69-59.13a162.18,162.18,0,0,1,3-30.75H356.1c-8.66,0-11.94-5.08-11.94-9.56,0-3.58,2.09-6.87,6-6.87l12.54-1.79c17-64.51,62.12-133.49,105.72-133.49,30.46,0,43.6,14.63,43.6,34.94C512,475.87,468.68,530.52,403,549.34Zm51.06-117.07c-9.55,0-30.76,44.8-44.2,90.19,40.92-20.31,56.15-52.26,56.15-72C466,439.74,461.52,432.27,454.05,432.27Z" transform="translate(-288.25 -383.83)" fill="#fff"/></svg>
		</div>

		<div class="bg-gray-200 w-full max-w-xl shadow-lg rounded-lg px-4 md:px-8 pt-6">
			<div class="text-center text-gray-500 mb-4">
				<p class="font-light">{{ __('Register with') }}</p>

				<div class="flex flex-col md:flex-row items-center justify-center pt-6">
					<button class="bg-white w-full px-4 py-2 shadow-md mx-2 my-2 flex items-center">
						<svg class="w-4 fill-current text-blue-600" viewBox="0 0 20 20"><path d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z"/></svg>
						<span class="ml-2">Facebook</span>
					</button>
					<button class="bg-white w-full px-4 py-2 shadow-md mx-2 my-2 flex items-center">
						<svg class="w-4 fill-current text-blue-400" viewBox="0 0 20 20"><path d="M17.316 6.246c.008.162.011.326.011.488 0 4.99-3.797 10.742-10.74 10.742-2.133 0-4.116-.625-5.787-1.697a7.577 7.577 0 005.588-1.562 3.779 3.779 0 01-3.526-2.621 3.858 3.858 0 001.705-.065 3.779 3.779 0 01-3.028-3.703v-.047a3.766 3.766 0 001.71.473 3.775 3.775 0 01-1.168-5.041 10.716 10.716 0 007.781 3.945 3.813 3.813 0 01-.097-.861 3.773 3.773 0 013.774-3.773 3.77 3.77 0 012.756 1.191 7.602 7.602 0 002.397-.916 3.789 3.789 0 01-1.66 2.088 7.55 7.55 0 002.168-.594 7.623 7.623 0 01-1.884 1.953z"/></svg>
						<span class="ml-2">Twitter</span>
					</button>
					<button class="bg-white w-full px-4 py-2 shadow-md mx-2 my-2 flex items-center">
						<svg class="w-4 fill-current text-black" viewBox="0 0 20 20"><path d="M13.18 11.309c-.718 0-1.3.807-1.3 1.799 0 .994.582 1.801 1.3 1.801s1.3-.807 1.3-1.801c-.001-.992-.582-1.799-1.3-1.799zm4.526-4.683c.149-.365.155-2.439-.635-4.426 0 0-1.811.199-4.551 2.08-.575-.16-1.548-.238-2.519-.238-.973 0-1.945.078-2.52.238C4.74 2.399 2.929 2.2 2.929 2.2c-.789 1.987-.781 4.061-.634 4.426C1.367 7.634.8 8.845.8 10.497c0 7.186 5.963 7.301 7.467 7.301l1.734.002 1.732-.002c1.506 0 7.467-.115 7.467-7.301 0-1.652-.566-2.863-1.494-3.871zm-7.678 10.289h-.056c-3.771 0-6.709-.449-6.709-4.115 0-.879.31-1.693 1.047-2.369C5.537 9.304 7.615 9.9 9.972 9.9h.056c2.357 0 4.436-.596 5.664.531.735.676 1.045 1.49 1.045 2.369 0 3.666-2.937 4.115-6.709 4.115zm-3.207-5.606c-.718 0-1.3.807-1.3 1.799 0 .994.582 1.801 1.3 1.801.719 0 1.301-.807 1.301-1.801 0-.992-.582-1.799-1.301-1.799z"/></svg>
						<span class="ml-2">Github</span>
					</button>
				</div>

				<hr class="border-b border-gray-300 my-8">

				<p class="font-light">{{ __('Or use the clasic way') }}</p>
			</div>

			<form action="{{ route('register') }}" method="POST" class="text-sm">
				@csrf

				<div class="flex flex-wrap -mx-3 mb-6">
					<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						<label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="name">{{ __('Name') }}</label>
						<input class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="{{ __('Email') }}" value="John Doe">
						@error('name') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
					</div>
					<div class="w-full md:w-1/2 px-3">
						<label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="email">{{ __('Email') }}</label>
						<input class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="{{ __('Email') }}" value="admin@example.com">
						@error('email') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
					</div>
				</div>

				<div class="flex flex-wrap -mx-3 mb-6">
					<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						<label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="password">{{ __('Password') }}</label>
						<input class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="{{ __('Password') }}" value="password123">
						@error('password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
						</div>
					<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						<label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="password">{{ __('Password Confirmation') }}</label>
						<input class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="{{ __('Password Confirmation') }}" value="password123">
						@error('password_confirmation') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
					</div>
				</div>

				<div class="flex items-center justify-between my-6">
					<button class="bg-gradient-red hover:bg-red-500 text-white font-light py-2 px-4 rounded shadow-lg focus:outline-none focus:shadow-outline" type="submit">{{ __('Register') }}</button>
					<a class="inline-block align-baseline font-light text-right text-sm text-gray-500 hover:text-gray-600" href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
				</div>
			</form>
		</div>

		<p class="text-center text-xs mt-4">
			<span>Made on a <svg class="w-4 ml-1 fill-current inline-block" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.564 13.862c-.413.916-.612 1.325-1.144 2.135-.742 1.13-1.79 2.538-3.087 2.55-1.152.01-1.448-.75-3.013-.741-1.564.008-1.89.755-3.043.744-1.297-.012-2.29-1.283-3.033-2.414-2.077-3.16-2.294-6.87-1.013-8.843.91-1.401 2.347-2.221 3.697-2.221 1.375 0 2.24.754 3.376.754 1.103 0 1.775-.756 3.365-.756 1.2 0 2.474.655 3.381 1.785-2.972 1.629-2.49 5.873.514 7.007zM12.463 3.808c.577-.742 1.016-1.788.857-2.858-.944.065-2.047.665-2.692 1.448-.584.71-1.067 1.763-.88 2.787 1.03.031 2.096-.584 2.715-1.377z"/></svg> MacBook Air by <a class="underline" href="https://lartisan.dev"> lartisan.dev</a></span>
		</p>
	</section> <!-- ./ Register Form -->

@endsection