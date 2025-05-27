<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href= "{{ asset('style.css') }}">
  </head>
  <body>
    <div class="bg-zinc-900 text-white inline-block p-5 absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] rounded-md">
      <div class="h-16 mb-4 rounded-sm bg-white">
        <p id="num" class="text-2xl z-20 text-zinc-950 p-4"></p>
      </div>
      <div class="flex flex-col text-2xl gap-5">
        <div class="flex gap-5">
          <button>1</button>
          <button>2</button>
          <button>3</button>
          <button>+</button>
        </div>
        <div class="flex gap-5">
          <button>4</button>
          <button>5</button>
          <button>6</button>
          <button>-</button>
        </div>
        <div class="flex gap-5">
          <button>7</button>
          <button>8</button>
          <button>9</button>
          <button>*</button>
        </div>
        <div class="flex gap-5">
          <button>0</button>
          <button>/</button>
          <button id="doCalc">=</button>
          <button id="ac">AC</button>
        </div>
      </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>
