<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center items-center w-screen h-screen overflow-hidden bg-black bg-opacity-80 absolute z-10 <?php if(!(isset($edit) && $edit === true)) echo 'hidden'?>" id="Add_overlay">
        <div class="bg-white rounded p-3 relative w-5/12 lg:w-3/12">
            <a href="/p/{{$product['id']}}" class="bg-slate-500 text-white rounded-full p-2 w-10 h-10 block text-center absolute -top-4 -right-4">X</a>
            <h2 class="flex justify-center">edit product</h2>
            

<form class="max-w-md mx-auto flex flex-col" action="/p/{{$product['id']}}" method="post">
    @csrf
    @method('put')
  <div class="relative z-0 w-full mb-5 group">
      <input type="text" value="{{$product['name']}}" name="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product Name</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="number" value="{{$product['price']}}" name="price" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <textarea type="text" name="desc" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>{{$product['desc']}}</textarea>
      <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
  </div>
 
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">save</button>
</form>

        </div>
    </div>
    <div class="flex justify-center flex-col items-center m-auto w-6/12 my-auto h-screen">
        <a href="/p" class="flex self-start rounded bg-slate-700 text-white p-3">Go Back</a>
    <h2 class="text-lg">{{$product['name']}}</h2>
    <p>{{$product['desc']}}</p>
    <a href="" class="bg-blue-400 rounded p-4">Buy For {{$product['price']}}$</a>
    <form action="/p/{{$product['id']}}" method="post" class="self-end">
        @csrf
        @method('patch')
        <button class="rounded p-1 bg-blue-700">EDIT</button>
    </form>
    <form action="/p/{{$product['id']}}" method="post" class="self-end">
        @csrf
        @method('delete')
        <button class="rounded p-1 bg-red-600">DELETE</button>
    </form>
</div>
    
</body>
</html>