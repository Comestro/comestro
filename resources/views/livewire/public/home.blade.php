<div>
    <x-header/>

    <x-public.home.banner/>
  <x-public.home.services/>
  <x-public.home.our-project/>

  <x-public.home.achievements/>

  <section class="py-16 bg-gray-100 text-center">
    <h3 class="text-gray-400 uppercase tracking-widest text-sm">Customer Says</h3>
    <h2 class="text-4xl font-bold text-gray-900 mt-2">Our Satisfied Customers</h2>
    <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 max-w-6xl mx-auto">
        <x-public.home.our-customer 
            image="images/customer1.jpg" 
            name="Dennis Green" 
            designation="UI Designer" 
            message="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
        />
        <x-public.home.our-customer 
            image="images/customer2.jpg" 
            name="Dennis Green" 
            designation="Web Developer" 
            message="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
        />
        <x-public.home.our-customer 
            image="images/customer3.jpg" 
            name="Dennis Green" 
            designation="System Analytics" 
            message="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
        />
    </div>
</section>
<x-footer/>
</div>
