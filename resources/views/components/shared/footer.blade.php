


@props(['home'])

<footer class="bg-primary-300 py-12 text-fontDark pb-24 lg:pb-12 border-t border-primary-600">
   
    <div class="max-w-screen-xl mx-auto space-y-10">
      
        <div
            class="flex flex-col gap-10 sm:gap-0  s justify-center items-center sm:items-start sm:grid sm:grid-rows-2 lg:grid-rows-1 sm:grid-cols-3 lg:grid-cols-4 mx-4">
            
            <div class="flex items-center justify-center col-span-4 lg:col-span-1">
                <a href="/" aria-label="">
                    <img src="{{ asset('assets/logo/logo--dark.png' ) }}" alt="logo Apartamenty Polana Sobiczkowa w Kościelisku " class="w-32 lg:ml-16"  width="128" height="73"/>
                    
                </a>
            </div>
         
            <div
                class=" mx-4 md:mx-12 flex flex-col gap-6 justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light text-secondary-400">
                      Telefon
                    </h2>
                    <div class=" flex flex-col gap-2">

                        <a href="tel:+48604280425" class="font-thin font-heading link-hover text-sm ">+48 604 280 425</a>
                        <a href="tel:+48604101207" class="font-thin font-heading link-hover text-sm ">+48 604 101 207 </a>

                       
                    </div>
                </div>
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light text-secondary-400">
                      Email
                    </h2>
                    <a href="mailto:polana.sobiczkowa@gmail.com"
                        class="font-thin font-heading link-hover text-sm ">polana.sobiczkowa@gmail.com</a>
                       
                </div>
            </div>
            <!--THREE-->
            <div
                class="mx-4 md:mx-12 flex flex-col justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <h2 class="font-heading text-lg uppercase mb-2 font-light text-secondary-400">Adres</h2>
                <a href="https://maps.app.goo.gl/MyBFZuPL8BkhxUQXA" target="_blank"
                    class="font-thin font-heading link-hover text-sm ">Sobiczkowa 59 <br />34-511 Kościelisko</a>
            </div>
            <!--FOUR-->
            <div class="mx-4  md:mx-12">
                <h2 class="font-heading text-lg uppercase mb-2 font-light text-secondary-400">
                    Social Media
                </h2>
              <div class="flex  justify-center sm:justify-start">

                  <a href="https://www.facebook.com/polanasobiczkowa" target="_blank" class="group" aria-label="facebook">
                    <x-iconpark-facebook-o class="group-hover:scale-105 duration-300 w-4  text-fontDark"    />
                </a>
            </div>
            </div>

        </div>
       
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

            <hr class="opacity-40 border-secondary-400" />
            <ul class="flex flex-wrap justify-center items-center gap-8 text-xs py-4">
                <li>
                    <a href="{{route('privacy-policy')}}" class="link-hover font-extralight">Polityka Prywatności</a>
                </li>
               
              
           
            </ul>
            <hr class="opacity-40 border-secondary-400" />
        </div>

      
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex justify-between items-center">
            <a href="{{route('home')}}" class="flex gap-2 justify-start items-center link-hover font-extralight">
                <span>© <span id="footerYear"></span></span>
                <span>Polana Sobiczówka</span>
            </a>

            <div>
                <a href="https://marketingmix.pl" target="_blank" class="flex justify-center items-center" aria-label="Agencja MarketingMix"><img
                        src="{{ asset('/assets/marketingmix-logo.svg') }}" class="w-32 hover:scale-105 duration-300"
                        alt="logo wykonawcy - agencja MarketingMix" width="128" height="20"/></a>
            </div>
        </div>
    </div>
   
</footer>