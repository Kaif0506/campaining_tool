<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Independent Height Scrollable Cards</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen p-6">

  <div class="overflow-x-auto">
    <div class="flex flex-nowrap gap-6" style="height: 600px;">
      <!-- Container has fixed height for 3 rows visually -->

      <!-- Inner column container -->
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@thatguy_tex</span>
          </div>
          <p class="text-sm">
            "Working with @supabase has been one of the best dev experiences..."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@justinjn0dev</span>
          </div>
          <p class="text-sm">
            "Short text card example."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@anotheruser</span>
          </div>
          <p class="text-sm">
            "Another card text."
          </p>
        </div>
      </div>

      <!-- Another column -->
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser</span>
          </div>
          <p class="text-sm">
            "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser2</span>
          </div>
          <p class="text-sm">
            "Shorter card."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser3</span>
          </div>
          <p class="text-sm">
            "Another card content."
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@thatguy_tex</span>
          </div>
          <p class="text-sm">
            "Working with @supabase has been one of the best dev experiences..."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@justinjn0dev</span>
          </div>
          <p class="text-sm">
            "Short text card example."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@anotheruser</span>
          </div>
          <p class="text-sm">
            "Another card text."
          </p>
        </div>
      </div>

      <!-- Another column -->
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser</span>
          </div>
          <p class="text-sm">
            "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser2</span>
          </div>
          <p class="text-sm">
            "Shorter card."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser3</span>
          </div>
          <p class="text-sm">
            "Another card content."
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@thatguy_tex</span>
          </div>
          <p class="text-sm">
            "Working with @supabase has been one of the best dev experiences..."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@justinjn0dev</span>
          </div>
          <p class="text-sm">
            "Short text card example."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@anotheruser</span>
          </div>
          <p class="text-sm">
            "Another card text."
          </p>
        </div>
      </div>

      <!-- Another column -->
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser</span>
          </div>
          <p class="text-sm">
            "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser2</span>
          </div>
          <p class="text-sm">
            "Shorter card."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser3</span>
          </div>
          <p class="text-sm">
            "Another card content."
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@thatguy_tex</span>
          </div>
          <p class="text-sm">
            "Working with @supabase has been one of the best dev experiences..."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@justinjn0dev</span>
          </div>
          <p class="text-sm">
            "Short text card example."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@anotheruser</span>
          </div>
          <p class="text-sm">
            "Another card text."
          </p>
        </div>
      </div>

      <!-- Another column -->
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser</span>
          </div>
          <p class="text-sm">
            "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser2</span>
          </div>
          <p class="text-sm">
            "Shorter card."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser3</span>
          </div>
          <p class="text-sm">
            "Another card content."
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@thatguy_tex</span>
          </div>
          <p class="text-sm">
            "Working with @supabase has been one of the best dev experiences..."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@justinjn0dev</span>
          </div>
          <p class="text-sm">
            "Short text card example."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@anotheruser</span>
          </div>
          <p class="text-sm">
            "Another card text."
          </p>
        </div>
      </div>

      <!-- Another column -->
      <div class="flex flex-col gap-6">
        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser</span>
          </div>
          <p class="text-sm">
            "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser2</span>
          </div>
          <p class="text-sm">
            "Shorter card."
          </p>
        </div>

        <!-- Card -->
        <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
          <button class="absolute top-2 right-2 text-white text-xl">&times;</button>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
            <span>@secondcoluser3</span>
          </div>
          <p class="text-sm">
            "Another card content."
          </p>
        </div>
      </div>

      <!-- Keep adding more columns like above -->
    </div>
  </div>

</body>
</html>
