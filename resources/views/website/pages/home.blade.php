@extends('website.layout.cashko')

@section('content')
<div class='main_banner'>
    <div class="container">
        <p>
            Walang kompromiso sa CashKO!
            <img src="{{ asset('images/CashKO_Accent-3.png') }}" class="line-cashko">
        </p>
        <p>
            CashKO is an insurance brokerage company that 
            provides affordable and accessible insurance 
            products for all Filipinos without compromise.
        </p>
        <img src="{{ asset('images/cashko-banner-full.jpg') }}" class="subject-img">
    </div>
</div>

<div class='section_1'>
    <div class="container">
        <p>1.5 million Filipinos covered in 2022</p>
        <img src="{{ asset('images/bigdot.png') }}" class="bigdot">
        <div>
            <p>60% faster claims turnaround time</p>
            <span>(versus traditional insurance providers)</span>
        </div>    
        <img src="{{ asset('images/bigdot.png') }}" class="bigdot">
        <p>
            95% claims approval rate
        </p>
    </div>
</div> 

<div class='home_about'>
    <div class="container">
        <img src="{{ asset('images/cashko-about-desktop.png') }}" class="hand">
        <img src="{{ asset('images/output-onlinepngtools-mobile.png') }}" class="hand2">
        <p>ABOUT</p>
        <p>CashKO’s goal is to build insurance solutions that make a difference in the lives of Filipinos.</p>
        <div>
            <p>As the first fully digital insurance brokerage in the country, CashKO Insurance Brokerage works with financial and retail institutions to provide the average Filipino with accessible microinsurance policies.</p>
            <p>While everyone needs insurance, we focus on programs for lower-income households across the country—the ones who need it the most. The good news is that these households have both the demand and budget for tailored microinsurance policies.</p>
        </div>
        <div>
            <p>Thanks to our nationwide and digital presence, it’s easy for us to partner with local financial institutions to deliver targeted microinsurance programs to Filipino families. This access allows us to provide faster claims turnaround times and deliver accessible insurance programs that work.  </p>
            <p>Grassroots reach is fundamental to CashKO’s operations. We work closely with partners to design insurance services based on specific customer needs, as well as market these services to the local community. This hands-on approach has allowed CashKO to rapidly expand across RuralNet’s network of rural banks, thrift banks, cooperatives, and microfinance institutions.</p>
        </div>
    </div>
</div>

<div class='section_2'>
    <div class="container">
        <div>
            <p class="item-1 items">
                CashKO’s parent company, RuralNet, is backed by the Philippines’ leading venture capital firms.
            </p>
            <img src="{{ asset('images/logo-kickstart.png') }}" class="img-kickstart items" />
            <img src="{{ asset('images/logo-gentree.png') }}" class="img-gentree items" />
            <img src="{{ asset('images/logo-foxmont.jpeg') }}" class="img-foxmont items" />
            <img src="{{ asset('images/logo-kaya.png') }}" class="img-kaya items" />
        </div>
    </div>
</div>  
<div class='section_3'>
    <div class="container">
        <p>
            Through customized financial technology solutions, CashKO brings insurance to those who need it the most.
        </p>
    </div>
</div>
<div class='home_cards'>
    <div class="container">
        <div class="cards-container">
           <div class="card-cashko">
                <img src="{{ asset('images/CashKo-Tertiatry-Descriptor-FW-10.png') }}" class="img-cashko" />
                <p>Our microinsurance plans are made-to-measure according to the specific needs of partners and their communities.</p>
                <a href="https://micro.cashko-insurance.com" target="_blank" class="btn">Learn More</a>
           </div> 
           <div class="card-sme">
                <img src="{{ asset('images/CashKo-Primary-Descriptor-FW-01.png') }}" class="img-sme" />
                <p>We work closely with Filipino SMEs to come up with coverages and policies that employees can understand and easily access online.</p>
                <a href="https://sme.cashko-insurance.com/" target="_blank" class="btn_blue">Learn More</a>
            </div> 
            <div class="card-ruralnet">
                <img src="{{ asset('images/ruralnet Insurance solutions.png') }}" class="img-ruralnet" />
                <p>RuralNet’s digital insurance distribution platform allows you to fully digitize the insurance process and make it more accessible to consumers.</p>
                <a href="https://ruralnet.ph/insurance_solutions" target="_blank" class="btn-primary">Learn More</a>
            </div> 
        </div>
    </div>
</div>

@include('website.pages.partials.footer_banner')
{{-- <div class='home_footer_banner'>
    <div class="container">
        <div class="container_adjustment">
            <div>
                <div>
                    <p>Our CashKO agents are always available to walk you through our micronsurance process.</p>
                    <img src="{{ asset('images/CashKO_Accent-2.png') }}" class="img-always" />
                </div>
                <div>
                    <p>Contact us today for a 15-minute consultation where we’ll help you determine a CashKO plan that works best for you.</p>
                    <img src="{{ asset('images/cashko-hand-blue-transparen.png') }}" class="img-ok" />
                </div>
            </div>
            <div>
                <table>
                    <tr>
                        <td class="td-label">Email:</td>
                        <td class="td-content">support@ruralnet.ph</td>
                    </tr>
                    <tr>
                        <td class="td-label">Toll-Free:</td>
                        <td class="td-content">1800 1320 0211</td>
                    </tr>
                    <tr>
                        <td class="td-label">Globe:</td>
                        <td class="td-content">(028) 876 1428</td>
                    </tr>
                    <tr>
                        <td class="td-label">PLDT:</td>
                        <td class="td-content">(032) 342 7826</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="td-label">Address:</td>
                        <td class="td-content">2/F 1830 South I.T. Bldg Brgy, Cebu City, 6000 Cebu</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div> --}}
@endsection