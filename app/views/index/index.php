<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Início</title>
</head>
<body class="bg-black text-black w-full h-full">
<div class="flex flex-col items-center justify-center bg-black rounded mt-32 p-8">
    <div class="w-full max-w-4xl mx-auto p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left">
        <h1 class="text-4xl font-bold text-white mb-4">TinyLinker</h1>
        <p class="text-lg text-white">Encurte com facilidade, compartilhe com agilidade.</p>
      </div>
      <div class="flex flex-col justify-center items-center">
        <input class="bg-white relative text-black font-semibold top-44 right-44 text-lg py-2 px-4 hover:bg-gray-800 hover:text-white w-300 text-center mb-4"type="text" placeholder="Cole seu link" for="link">
        <button class="bg-white relative text-black font-semibold top-44 left-10 text-lg py-2 px-4 rounded-full hover:bg-gray-800 hover:text-white w-48 text-center mb-4">
          Encurtar
        </button>
    </div>
  </div>
</div>
</body>

</html>