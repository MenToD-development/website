<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>MenToD - Meant to develop - Freelance full-stack webdevelopment</title>

  @vite('resources/css/app.css')
</head>
<body class="antialiased min-h-screen bg-slate-100 flex flex-col">
<main class="px-4 md:px-0">
  <div class="mx-auto py-20 container">
    <div class="text-center">

      @include('svg.logo')

      <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block xl:inline text-slate-800">Freelance</span><br />
        <span class="block text-green-400 xl:inline">Full-stack</span>
        <span class="block text-blue-900 xl:inline">webdevelopment</span>
      </h1>
      <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
        Met mijn jaren ervaring op verschillende gebieden van web ontwikkelingen wil ik mij beschikbaar stellen aan
        iedereen die dat nodig heeft. Ik ben daarom in te huren om een team te versterken, advies te geven of om
        complete ontwikkelingen te verrichten.
      </p>
      <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
        <strong>Interesse?</strong><br />Stuur mij gerust een e-mail of neem contact met me op via LinkedIn.
      </p>
      <div class="mx-auto mt-5 sm:flex sm:justify-center md:mt-8">
        <div class="rounded-md shadow">
          <a href="mailto:info@mentod.nl" class="flex w-full items-center justify-center rounded-md border border-transparent bg-green-400 px-8 py-3 text-base font-medium text-white hover:bg-green-500 md:py-4 md:px-10 md:text-lg">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            Stuur mij een e-mail
          </a>
        </div>
        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
          <a href="https://fantastical.app/mentempelaar/kennismaking" target="_blank"
             class="flex w-full items-center justify-center rounded-md border border-transparent bg-green-400 px-8 py-3 text-base font-medium text-white hover:bg-green-500 md:py-4 md:px-10 md:text-lg">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Vraag een kennismaking aan
          </a>
        </div>
      </div>
      <div class="mx-auto mt-5 sm:flex sm:justify-center md:mt-8">
        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
          <a href="https://www.linkedin.com/in/menno-tempelaar/" target="_blank"
             class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-slate-800 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg">
            <svg class="h-6 w-6 mr-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 382 382" xml:space="preserve">
                    <path style="fill: black;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
                      C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
                      H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
                      c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
                      s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
                      c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
                      c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
                      c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
                      L341.91,330.654L341.91,330.654z"/>
                  </svg>
            LinkedIn
          </a>
        </div>
        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
          <a href="https://github.com/mennotempelaar" target="_blank"
             class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-slate-800 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg">
            <svg class="h-6 w-6 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
            Github
          </a>
        </div>
      </div>
    </div>
  </div>
  <section class="mx-auto container py-20">
    <h1 class="text-4xl text-slate-800 mb-12">Momenteel werkzaam voor</h1>
    <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200 shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
      <div class="rounded-tl-lg rounded-tr-lg sm:rounded-tr-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500"
           onclick="window.open('https://fourdesign.nl', '_blank');">
        <div>
          <span class="rounded-lg inline-flex p-3 ring-4 ring-white">
            <!-- Heroicon name: outline/clock -->
            <svg class="w-1/2" id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.12 68.96">
              <defs><style>.cls-1{fill:#1d1d1b;}</style></defs>
              <path class="cls-1" d="M2.3,0A2.3,2.3,0,0,0,0,2.3V66.66A2.3,2.3,0,0,0,2.3,69H13.79V41.38h23a2.31,2.31,0,0,0,2.3-2.3V27.58H13.79V13.79H43.67a2.3,2.3,0,0,0,2.3-2.3V0Z"/>
              <path class="cls-1" d="M80.19,0H72.83a19.3,19.3,0,0,0-19.3,19.31V49.65A19.3,19.3,0,0,0,72.83,69h7.36A19.3,19.3,0,0,0,99.5,49.65V19.31A19.3,19.3,0,0,0,80.19,0Zm5.52,49.65a5.52,5.52,0,0,1-5.52,5.52H72.83a5.52,5.52,0,0,1-5.51-5.52V19.31a5.52,5.52,0,0,1,5.51-5.52h7.36a5.52,5.52,0,0,1,5.52,5.52Z"/>
              <path class="cls-1" d="M152.81,0H141.32V49.65a5.52,5.52,0,0,1-5.52,5.52h-7.35a5.52,5.52,0,0,1-5.52-5.51V2.3h0a2.3,2.3,0,0,0-2.3-2.3H109.14V49.65A19.31,19.31,0,0,0,128.45,69h7.35a19.31,19.31,0,0,0,19.31-19.31V2.3A2.3,2.3,0,0,0,152.81,0Z"/>
              <path class="cls-1" d="M191.41,0H164.75V66.66A2.3,2.3,0,0,0,167,69h11.54V53.57a5.51,5.51,0,0,1,2.95-4.88l5.55-2.8,8,20.5c1.18,2.31,2.23,2.57,4.28,2.57h9.09c1.63,0,2-1.58,1.29-3.06L199.47,39.69a18.52,18.52,0,0,0,11.22-17.52V19.28A19.28,19.28,0,0,0,191.41,0Zm5.5,22.17a5.48,5.48,0,0,1-1.3,3.52l-.12.15a5.59,5.59,0,0,1-1.72,1.29l-15.19,7.61v-21h12.83a5.15,5.15,0,0,1,1.18.14,5.5,5.5,0,0,1,4.32,5.37Z"/>
              <path class="cls-1" d="M247,0H220.36V66.66a2.3,2.3,0,0,0,2.31,2.3H247a19.3,19.3,0,0,0,19.31-19.31V19.31A19.3,19.3,0,0,0,247,0Zm5.52,49.64A5.52,5.52,0,0,1,247,55.17H234.16V13.79H247a5.52,5.52,0,0,1,5.52,5.52Z"/>
              <path class="cls-1" d="M289.76,55.17V41.37h23a2.3,2.3,0,0,0,2.3-2.3V27.58H289.76V13.79h28.16a2.3,2.3,0,0,0,2.3-2.3V0h-42A2.3,2.3,0,0,0,276,2.3V66.66a2.3,2.3,0,0,0,2.29,2.3h41.38a2.3,2.3,0,0,0,2.3-2.3V55.17Z"/>
              <path class="cls-1" d="M394.6,0H383.11V66.66a2.3,2.3,0,0,0,2.3,2.3H396.9V2.3A2.3,2.3,0,0,0,394.6,0Z"/>
              <path class="cls-1" d="M505.72,0H494.33V37.44L475.62,1.24a2.29,2.29,0,0,0-2-1.24H462.15V66.66a2.3,2.3,0,0,0,2.3,2.3h9.2a2.29,2.29,0,0,0,2.29-2.3V31.9l18.52,35.82a2.31,2.31,0,0,0,2,1.24h9.33a2.29,2.29,0,0,0,2.29-2.3V2.3A2.39,2.39,0,0,0,505.72,0Z"/>
              <path class="cls-1" d="M450.21,27.59H429.53V39.08a2.3,2.3,0,0,0,2.29,2.3h6.9v8.27a5.52,5.52,0,0,1-5.52,5.52h-7.35a5.52,5.52,0,0,1-5.52-5.52V19.31a5.52,5.52,0,0,1,5.52-5.52H443.3a2.3,2.3,0,0,0,2.3-2.3V0H425.85a19.31,19.31,0,0,0-19.31,19.31V49.65A19.31,19.31,0,0,0,425.85,69h7.51a19.31,19.31,0,0,0,19.15-19.31V29.89A2.29,2.29,0,0,0,450.21,27.59Z"/>
              <path class="cls-1" d="M364.9,32.43l-18.17-8.35a5.32,5.32,0,0,1-3.12-4.77h0a5.52,5.52,0,0,1,5.52-5.52H371.2a2.3,2.3,0,0,0,2.3-2.3V0H349.13a19.32,19.32,0,0,0-19.31,19.31,19.49,19.49,0,0,0,11,17.23L359,44.89a5.23,5.23,0,0,1,3,4.76h0a5.51,5.51,0,0,1-5.51,5.52H332.12a2.3,2.3,0,0,0-2.3,2.3V69h26.67a19.21,19.21,0,0,0,8.41-36.53Z"/>
            </svg>
          </span>
        </div>
        <div class="mt-8">
          <h3 class="text-lg font-medium">
            <a href="#" class="focus:outline-none">
              <!-- Extend touch target to entire panel -->
              <span class="absolute inset-0" aria-hidden="true"></span>
              Fourdesign
            </a>
          </h3>
          <p class="mt-2 text-sm text-gray-500">
            Wij geloven dat elk merk van betekenis kan zijn. Móét zijn. We houden je een spiegel voor. Brengen waarheid
            en ambitie samen. Sturen jou in heel het proces. Zodat, wat jou uniek maakt, herkenbaar én van betekenis
            wordt voor je klanten, medewerkers en voor jezelf. Mogen we voor jou ook het verschil maken?
          </p>
          <p class="mt-20 text-sm text-gray-500">
            <strong>Mijn werkzaamheden:</strong><br />
            Voorheen heb ik al 12 jaar als webdeveloper en uiteindelijk Lead Developer gewerkt. Na mijn keuze om als
            freelancer zelf aan de slag te gaan ben ik altijd nog betrokken gebleven bij het bedrijf. Momenteel
            onderhoud ik nog projecten binnen Fourdesign waar mijn kennis nog voor nodig is en werk ik mee aan nieuwe
            projecten van Fourdesign. Hierbij verricht ik vooral back-end werkzaamheden.
          </p>
          <div class="mt-6">
            <a href="https://fourdesign.nl" target="_blank"
               class="inline-flex items-center rounded-md border border-transparent bg-green-100 px-4 py-2 text-base font-medium text-green-700 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              Lees meer over Fourdesign
            </a>
          </div>
        </div>
        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
          </svg>
        </span>
      </div>

      <div class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500"
          onclick="window.open('https://quintens.nl', '_blank');">
        <div>
          <span class="rounded-lg inline-flex p-3 ring-4 ring-white">
            <!-- Heroicon name: outline/check-badge -->
           <img class="w-1/2" src="{{ url('images/logo-quintens.webp') }}" alt="Quintens">
          </span>
        </div>
        <div class="mt-8">
          <h3 class="text-lg font-medium">
            <a href="#" class="focus:outline-none">
              <!-- Extend touch target to entire panel -->
              <span class="absolute inset-0" aria-hidden="true"></span>
              Quintens
            </a>
          </h3>
          <p class="mt-2 text-sm text-gray-500">
            Quintens werkt sinds 1997 aan het verwezenlijken van één doel: met een hecht en professioneel team
            bijdragen aan een duurzame wereld. Dat doen we door advies te geven en samen met bedrijven of overheden te
            ondernemen. Waar nodig werken we samen met bedrijven uit ons netwerk die ons aanvullen met specialistische
            kennis op het gebied van bijvoorbeeld gevaarlijke stoffen, energiebesparing en verduurzaming.
          </p>
          <p class="mt-8 text-sm text-gray-500">
            <strong>Mijn werkzaamheden:</strong><br />
            Quintens heb ik leren kennen via een Freelance opdrachten platform. Een compleet andere omgeving dan wat ik
            voorheen ben gewend. Bij Quintens werk ik mee aan de ontwikkeling van hun eigen ISA applicatie. Dit is
            een Laravel applicatie met een grote verzameling van gegevens. Het gaat hierom het oplossen van bugs, het
            toevoegen van nieuwe functionaliteiten en/of het refactoren van de huidige code.
          </p>
          <div class="mt-6">
            <a href="https://quintens.nl" target="_blank"
                    class="inline-flex items-center rounded-md border border-transparent bg-green-100 px-4 py-2 text-base font-medium text-green-700 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              Lees meer over Quintens
            </a>
          </div>
        </div>
        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
          </svg>
        </span>
      </div>
    </div>
  </section>
</main>
<footer class="bg-white">
  <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
    <div class="flex justify-center space-x-6 md:order-2">
      <a href="https://github.com/mennotempelaar" target="_blank" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">GitHub</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
        </svg>
      </a>
      <a href="https://github.com/mennotempelaar" target="_blank" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">LinkedIn</span>
        <svg class="h-6 w-6 mr-2" fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 382 382" xml:space="preserve">
                  <path d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
                    C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
                    H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
                    c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
                    s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
                    c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
                    c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
                    c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
                    L341.91,330.654L341.91,330.654z"/>
                </svg>
      </a>
    </div>
    <div class="mt-8 md:order-1 md:mt-0">
      <p class="text-center text-base text-gray-400">&copy; {{ date('Y') }} MenToD. All rights reserved.</p>
    </div>
  </div>
</footer>

</body>
</html>
