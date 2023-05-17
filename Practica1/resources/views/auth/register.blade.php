<!-- Crear una directiva para incluir la navegacion -->

@extends('layouts.app')

{{-- Seccion para asignar el titulo --}}
@section('titulo')
    Registrate a Devstagram
@endsection 

{{-- Seccion para asignar el contenido de la mayor parte de la pagina --}}
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        {{-- Columna para mostrar la imagen del lado izquierdo --}}
        <div class="md:w-6/12 p-5">
            {{-- insertar imagen utilizando "asert" para acceder a carpeta publica--}}
            <img src="{{asset ('imagenes/registrar.jpg')}}" alt="registro de usuarios">
        </div>    
        {{-- Columna para mostrar el formulario --}}
        <div class="md:w-4/12 bg:white p-5 rounded-lg shadow-xl">
            {{-- Seccion del formulario para los diferentes elementos solicitados a ser llenado como nombre, username, password y correo --}}
            <form>
                
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" type="text" name="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
                </div>
            
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input id="username" type="text" name="username" placeholder="Tu username" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" type="text" name="email" placeholder="Tu email de registro" class="border p-3 w-full rounded-lg">
                </div>
                
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" type="password" name="password" placeholder="Tu password de registro" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Repetir password" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>  
    </div>

@endsection

