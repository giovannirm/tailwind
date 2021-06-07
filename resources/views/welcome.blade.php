<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tailwind</title> 
    <style>
        .imagen{
            background-image: url("{{asset('img/fade.jpg')}}");
            height: 400px;
            width: 900px;
            margin-left: auto;
            margin-right: auto;            
        }    
    </style>  
</head>
<body>
    <div class="container">
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent">
            Hola mundo
        </div>
        {{-- <div class="bg-blue-700 h-12 bg-opacity-25"></div> --}}
        {{-- <h1 class="text-center text-3xl font-bold my-4">Background</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum nulla temporibus libero eaque unde accusamus odio magni ut nobis assumenda, ea iusto tenetur suscipit, officiis, ex ipsum corporis amet culpa!</p>        
        <div class="imagen bg-fixed"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ducimus quisquam accusantium esse accusamus voluptas tempora suscipit debitis fugiat, facere veritatis officia numquam recusandae cumque! Dolorem libero dolores cumque!</p>
        <p>Reiciendis nobis dolorem aperiam animi amet beatae repellendus assumenda rerum sequi enim tenetur temporibus maiores quaerat ad, ipsum provident earum unde explicabo quis, magni quos? Corrupti ipsa ducimus voluptatibus nobis?</p>
        <p>Voluptatum laudantium cumque nulla esse dicta quas qui praesentium ab eum, aspernatur placeat aut culpa minima accusamus accusantium ullam inventore explicabo incidunt velit vitae corrupti hic! Suscipit repellat impedit praesentium.</p>
        <p>Sint dolor voluptatum fugiat repellendus eius aut magni maiores laboriosam id reiciendis ab, sit minima vel blanditiis corporis alias ullam. A voluptatibus, quod cupiditate temporibus quas magni tempora animi excepturi.</p>
        <p>Tempore iusto expedita repudiandae perspiciatis assumenda animi nam ipsa velit tenetur laboriosam odit nisi molestias minima obcaecati, sint dicta et sapiente non ad. Harum doloribus quibusdam consequuntur necessitatibus sint hic.</p>
        <p>Quae magni ipsam at culpa saepe error non, doloremque neque explicabo natus quisquam ipsum incidunt! Tenetur odit quis esse nobis quod nemo, mollitia sed illo excepturi eos praesentium ipsam quibusdam!</p>
        <p>Voluptates, velit nisi suscipit cum similique porro magni rerum facilis dignissimos quis quidem doloremque qui, quia illo perferendis aut, laudantium saepe! Totam, voluptas non consequuntur possimus sit velit! Suscipit, debitis!</p>
        <p>Possimus dolorem voluptatem inventore unde ipsam. Cupiditate dicta eos suscipit perferendis quae molestiae tenetur dolorem, aut amet exercitationem eligendi sunt qui architecto consequatur hic ad accusantium sed dolore quibusdam nihil!</p>
        <p>Omnis praesentium similique esse modi architecto quaerat illum a quis aliquam illo, non veniam culpa. Maiores ab consequuntur, repellendus eum vel aperiam adipisci culpa! Laborum, id provident! Sequi, et quasi!</p>
        <p>Sunt, autem porro aspernatur officiis eligendi amet mollitia animi minus nihil, est veritatis quaerat inventore obcaecati perferendis et nulla unde cumque nemo dolore, blanditiis consectetur architecto. Dolor obcaecati rem soluta?</p> --}}
        {{-- <div class="imagen bg-cover bg-center border-8 border-gray-500 border-dashed bg-clip-content p-4"></div> --}}
        {{-- <h1 class="uppercase text-lg underline font-bold text-left md:text-center lg:text-right">Este es el título</h1>
        <p class="text-red-900 hover:text-opacity-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, amet fugit assumenda dolor numquam ullam dolore obcaecati laboriosam quas tenetur sed neque consectetur natus incidunt voluptate cum illum fugiat. Deserunt!</p>
        <ul class="list-decimal md:list-disc list-inside text-justify">
            <li class="hover:line-through">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, voluptates molestias magnam quod accusantium nemo nam obcaecati doloribus eos ipsum id, incidunt commodi voluptatum labore maxime, veritatis doloremque molestiae. Adipisci.</li>
            <li>Molestias maxime, debitis aut adipisci minus tempore? Quas, quos distinctio? Minus quasi et natus doloribus non atque eius! Ab iste obcaecati corporis et aliquid explicabo eaque quam dicta quas id?</li>
            <li>Odio iste ipsam sunt perferendis! Repellendus nam odit exercitationem minima laborum rerum repudiandae quas atque nisi voluptates voluptatem assumenda quidem totam perferendis, aut nihil minus, perspiciatis aspernatur ipsa ad nemo.</li>
            <li>Magnam autem ut praesentium quidem repellat amet blanditiis harum consequuntur officiis vero fugit atque debitis sunt alias, illum veritatis maxime! Ipsum deserunt voluptas culpa optio est enim incidunt quisquam accusantium?</li>
            <li class="lowercase">Pariatur totam optio, sed sit vel neque perferendis aut? Eaque beatae doloremque, placeat asperiores molestiae quis in error libero ad unde saepe sed illum necessitatibus sunt tempore, eius temporibus repellendus.</li>
        </ul>
        <p class="capitalize">michelle giovanni rojas morales</p> --}}
        
        
        {{-- <p class="tracking-widest">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque animi id laboriosam non expedita eligendi perferendis! Ex ipsum laudantium amet impedit, consectetur totam, eum autem dolorem at iure possimus odio.</p> --}}

        {{-- <p class="font-work font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolore quibusdam totam sed a libero cum eius, cupiditate maiores, harum at debitis facilis nisi unde minus dolores vel pariatur voluptatibus.</p>
        <p class="font-work font-extrabold">Accusantium optio, sapiente reprehenderit mollitia quis praesentium incidunt rem exercitationem dolorum eaque cumque pariatur voluptates accusamus a reiciendis vitae repellat commodi ad. Dicta incidunt quia blanditiis nisi, totam magnam minima.</p>
        <p class="font-work font-thin">Maxime fugit eligendi mollitia provident libero expedita soluta ipsum nihil pariatur inventore, numquam dolore quas, repellendus accusamus nam consequatur modi. Possimus dolorum voluptates in! Nesciunt rem alias optio tenetur eos.</p>
        <p class="font-work font-hairline">Eligendi est quos autem quae? Aliquid voluptas accusamus voluptatibus suscipit repellat in quas corrupti nam magni vero non minus nostrum officiis facere necessitatibus sed libero, quae vitae aliquam debitis id!</p> --}}

        {{-- <h1 class="">Este es un título de prueba</h1>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae excepturi sed ex, qui natus sint aperiam, odit sequi velit doloribus vero dolor! Alias itaque amet, odio neque dignissimos eum aspernatur.</p>
        <ul>
            <li class="">Elemento #01</li>
            <li class="">Elemento #03</li>
            <li class="">Elemento #02</li>
        </ul> --}}


        {{-- <div class="grid grid-flow-col grid-rows-3">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div> --}}

        {{-- div class="grid grid-cols-4 grid-rows-2 gap-4">
            <div class="bg-green-200">A</div>
            <div class="bg-green-300">B</div>
            <div class="bg-green-400 col-span-2 row-span-2">C</div>
            <div class="bg-green-500">D</div>
            <div class="bg-green-600">C</div>
        </div> --}}

        {{-- <div class="grid grid-cols-16 gap-4">
            <div class="bg-green-200">A</div>
            <div class="bg-green-300">B</div>
            <div class="bg-green-400">C</div>
            <div class="bg-green-500">D</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
            <div class="bg-green-600">C</div>
        </div> --}}
    </div>
</body>
</html>