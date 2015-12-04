@extends('public.layouts.public')

@section('pageTitle', 'Tourist Information')

@section('body_class', 'page')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m8">
                        <div class="white-transparent">
                            <h3 class="parallax__title">Dubai</h3>
                            <p>
                                Dubai’s location at the cross-roads of Europe, Asia and Africa makes for easy accessibility.
                                London is seven hours away, Frankfurt six, Hong Kong eight and Nairobi four. Most
                                European capitals and other major cities have direct flights to Dubai, many with
                                a choice of operator.
                            </p>
                            <p>
                                More than 80 airlines take advantage of Dubai’s open skies policy, and operate to
                                and from Dubai International Airport to more than 130 destinations, making it one
                                of the world’s busiest.
                            </p>
                            <p>
                                Dubai is the home base of Emirates, the award-winning international airline of the
                                UAE, which operates scheduled services to more than 45 destinations.
                            </p>
                            <p>
                                Dubai International Airport has comprehensive facilities for people with physical
                                disabilities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {!! getPhoto('dubai.jpg', 'Dubai') !!}
        </div>
    </div>

    <div class="section">
        <div class="row container center-content">
            <div class="col s12 m12">
                <h1 class="page__title">Tourist Information</h1>
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header">
                            Visas Requirements
                        </div>
                        <div class="collapsible-body">
                            <p>
                                Most travellers need to obtain a visa prior to entering the emirate. However, the
                                good news is that the UAE authorities have taken many steps to make this process
                                as straightforward as possible. Citizens of 39 countries - GCC nationals plus nationals
                                of listed countries - do not require visas prior to arrival at a UAE airport. In
                                addition, there are efficient systems in place to facilitate visitors not falling
                                into one of the above categories.
                            </p>
                            <p>
                                The kind of visa that you require for entry into the UAE depends on several different
                                factors such as your nationality, the purpose of your planned visit and its planned
                                duration. Please read the following carefully. Regulations do change from time to
                                time and, whilst we do endeavour to keep up to date, you are advised to check with
                                your airline and regional UAE embassy or consulate on the latest information regarding
                                types of visas, fees and the rules and regulations.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div class="collapsible-header">
                            Who needs a visa and who doesn’t
                        </div>

                        <div class="collapsible-body">
                            <p>
                                If you are a national citizen of a GCC country you do not require a visa to visit
                                the UAE. You will simply need to produce your GCC country passport upon arrival
                                at the point of entry into the UAE.
                            </p>
                            <p>
                                The following categories of visitors may receive their visit visa at the airport,
                                upon arrival:
                            </p>
                            <ul>
                                <li>
                                    AGCC Residents who are not GCC nationals but who have a high professional status
                                    such as company managers, business people, auditors, accountants, doctors, engineers,
                                    pharmacists, or employees working in the public sector, their families, drivers
                                    and personal staff sponsored by them, are eligible for a non-renewable 30-day visa
                                    upon arrival at the approved ports of entry.
                                </li>
                                <li>
                                    National citizens of the following countries: UK(with the right of abode in UK),
                                    France, Italy, Germany, the Netherlands, Belgium, Luxembourg, Switzerland, Austria,
                                    Sweden, Norway, Denmark, Portugal, Ireland, Greece, Finland, Spain, Monaco, Vatican,
                                    Iceland, Andorra, San Marino, Liechtenstein, United States, Canada, Australia, New
                                    Zealand, Japan, Brunei, Singapore, Malaysia, South Korea and holders of Hong Kong
                                    SAR passports will be granted a free of charge visa for a single visit upon arrival
                                    in the UAE. It should be noted that this list may vary slightly from time to time
                                    and it is therefore best to check with your local UAE embassy or the airline that
                                    you are using to fly to the UAE.
                                </li>
                            </ul>
                            <p>
                                If you do NOT fall into one of the above categories, you will require a visa and
                                a sponsor for your visit. The sponsor normally applies for the visa on your behalf.
                                Valid sponsors are:
                            </p>
                            <ul>
                                <li>
                                    Hotels & Tourist Companies can apply, on your behalf, for a Tourist Visa (valid
                                    for 30 days); or a Service Visa (valid for 14 days); or a Visit Visa (valid for
                                    30 days and can be extended for other 30 days).
                                </li>
                                <li>
                                    Airlines & Airlines Handlers apply on behalf of their crew members for a 96-hour
                                    Transit Visa.
                                </li>
                                <li>
                                    Other Organizations based in the UAE may only apply for Visit Visas and Service
                                    Visas.
                                </li>
                                <li>
                                    Individuals (Relatives or Friends) already resident in the UAE may, subject to guidelines,
                                    also apply on your behalf for a Visit Visa.
                                </li>
                            </ul>
                            <p>
                                If you are coming to work in the UAE you will require a visa that can only be obtained
                                on your behalf by your employer or sponsor.
                            </p> 
                        </div>
                    </li>    

                    <li>
                        <div class="collapsible-header">
                            Regulations for visa application
                        </div>
                        
                        <div class="collapsible-body">
                            <ul>
                                <li>Passport must have minimum 6 months validity at the time of applying for an Entry Permit.</li>
                                <li>All photographs are to be recent colour photographs. (Polaroid Photographs are not accepted)</li>
                                <li>Those who are already in the U.A.E cannot get another entry permit until he/she departs from U.A.E.</li>
                            </ul>
                        </div>
                    </li>    
                    
                    <li>
                        <div class="collapsible-header">
                            Health requirements
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                No health certificates are required for entry to Dubai, but it is always wise to
                                check before departure, as health restrictions may vary depending upon the situation
                                at the time.
                            </p>   
                        </div>
                    </li>    
                    
                    <li>
                        <div class="collapsible-header">
                            Customs Duty-free allowances
                        </div>
                        
                        <div class="collapsible-body">
                            <ul>
                                <li>4 liters Spirits (any kind of alcohol) (1000 ml each liter) In case that a passenger wants to buy beer it will be 24 cans (every 6 cans equivalent to 1 liter spirit)</li>
                                <li>400 pieces of cigarettes (which is equivalent to 2 boxes)</li>
                                <li>2 Kilos of Tobacco (any kind of snuffing or chewing tobacco is not allowed)</li>
                                <li>Cigars which is equivalent to Dhs. 3000 (Three Thousands Dirhams) maximum which is for personal use.</li>
                                <li>Perfumes or any other gifts which is equivalent to 3000 (Three Thousands Dirhams) maximum which is for personal use.</li>
                                <li>Currency below 40,000 Dhs. or equivalent of this amount in other currencies.</li>
                            </ul> 
                        </div>
                    </li>      

                    <li>
                        <div class="collapsible-header">
                            Geography & Climate
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                The second largest of the seven emirates which make up the United Arab Emirates,
                                Dubai is located on the southern shore of the Arabian Gulf. It has an area of some
                                3,900 square kilometres. Outside the city itself, the emirate is sparsely inhabited
                                and characterised by desert vegetation.
                            </p> 

                            <p>
                                Dubai has a sub-tropical, arid climate. Sunny, blue skies can be expected most of
                                the year. Rainfall is infrequent and irregular, falling mainly in winter.
                            </p>
                            <p>
                                Temperatures range from a low of about 10.5°C/50°F to a high of 48°C/118°F. The
                                mean daily maximum is 24°C/75.2°F in January rising to 41°C/105.8°F in July.
                            </p>                            
                        </div>
                    </li>    

                    <li>
                        <div class="collapsible-header">
                            Language
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                The official language is Arabic but English is widely spoken and understood. Both languages are commonly used in business and commerce.
                            </p>  
                        </div>
                    </li>     

                    <li>
                        <div class="collapsible-header">
                            Religion
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Islam is the official religion of the UAE and there are a large number of mosques throughout the city. 
                            </p>

                            <p>
                                Other religions are respected and Dubai has Christian churches, St Mary’s (Roman Catholic) and Holy Trinity (Inter-denominational) among others.
                            </p> 
                        </div>
                    </li>                                                                                                                 
                    <li>
                        <div class="collapsible-header">
                            Clothing
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Lightweight summer clothing is suitable for most of the year, but sweaters or jackets may be needed for the winter months, especially in the evenings.
                            </p>
                            <p>
                                Compared with certain parts of the Middle East, Dubai has a very relaxed dress code. However, care should be taken not to give offence by wearing clothing which may be considered revealing.
                            </p>
                            <p>
                                At the pool or on the beaches, trunks, swim-suits and bikinis are quite acceptable.
                            </p>
                            <p>
                                Good quality sunglasses are advised, and photo- chromatic lenses for those who wear spectacles. Hats or some protection for the head are advisable when in direct sunlight.
                            </p>
                        </div>
                    </li>   
                    
                    <li>
                        <div class="collapsible-header">
                            Business Hours
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                The weekend has traditionally been Thursday afternoon and Friday, but some organisations
                                now close on Friday and Saturday, working through Thursday afternoon instead.
                            </p>
                            <p>
                                Government offices are open from 7.30am - 2.30pm (Sunday - Thursday and off on Friday and Saturday).
                            </p>
                            <p>
                                Private sector office hours vary, but are generally from 8.00am - 1.00pm, re-opening at either 3.00pm or 4.00pm and closing at 6.00pm or 7.00pm for those that work in split shifts. For most other offices regular working hours are 9am to 5pm.
                            </p>
                            <p>
                                Shop hours are similar in their opening times, but most shops remain open until 9.00–10.00pm. Department stores, boutiques, souks and many food shops remain open on a Friday, apart from prayer times (between 11.30am and 1.30pm), while larger shops re-open on a Friday afternoon at around 4.00–5.00pm.
                            </p>
                            <p>
                                Embassies and consulates are generally open from 8.45am–12.30pm and are closed on Fridays and in most cases on Saturdays, but usually leave an emergency number on their answering machines.
                            </p>   
                        </div>
                    </li>         
                    
                    <li>
                        <div class="collapsible-header">
                            Medical Attention & Care
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Dubai has many well-equipped hospitals. The Dubai Department of Health and Medical Services runs Dubai Hospital, Rashid Hospital, Maktoum Hospital and Al Wasl hospital.
                            </p>
                            <p>
                                Dubai Hospital is one of the best medical centres in the Middle East, with specialised clinics; Al Wasl Hospital is a specialised maternity and gynaecology hospital. The department also operates a number of out-patient clinics, of which one is situated in Jebel Ali.
                            </p>
                            <p>
                                In addition, there are a number of well-equipped private hospitals with in- and out-patient facilities. Dubai also has the Dubai Healthcare City, the world's first healthcare free zone, which boasts two complementary communities, namely, the Medical Community and the Wellness Community. The Medical Community, occupying an area of 4.1 million square feet, focuses on clinical services for disease treatment and prevention, while the Wellness Community, 19 million square feet, completes DHCC’s healthcare continuum by housing hospitals, outpatient clinics, luxury spa resorts, and the entire spectrum of wellness services.
                            </p>  
                        </div>
                    </li>        
                    
                    <li>
                        <div class="collapsible-header">
                            Telecommunications
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Telecommunications are excellent, both within the UAE and with the outside world. There are two service providers Etisalat & Du.  Telephone calls within Dubai city are free. Direct dialling is available to most countries.
                            </p>  
                        </div>
                    </li>        
                    
                    <li>
                        <div class="collapsible-header">
                            Electricity
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                The electricity supply in Dubai is 220/240 volts at 50 cycles. US-made appliances may need a transformer.
                            </p>
                        </div>
                    </li>  
                    
                    <li>
                        <div class="collapsible-header">
                            Water
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Tap water is quite safe to drink but visitors usually prefer locally-bottled mineral water and this is generally served in hotels and restaurants.
                            </p> 
                        </div>
                    </li>        
                    
                    <li>
                        <div class="collapsible-header">
                            Taxis
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Taxis are the most common way of getting around. Metered cabs from Dubai Transport Corporation, recognised by their cream colour, are efficient and have well-trained and courteous drivers. For fares please visit the Road Transports Authority website 
                            </p>
                            <p>
                                Dubai Transport taxis also operate a service from the airport. Most hotels operate transport for their guests. There are also several radio taxi companies which have cars on call and whose numbers are available at all hotels.
                            </p> 
                        </div>
                    </li>                                                                                                                  
                    <li>
                        <div class="collapsible-header">
                            Car Hire
                        </div>
                        
                        <div class="collapsible-body">
                            <p>
                                Self-drive cars are available from car rental companies for visitors who have an international driving licence. Customers must produce their passport along with the valid licence.
                            </p>
                            <p>
                                Visitors without an international driving licence may obtain a temporary local driving licence as long as they hold a valid national licence from one of the following countries: Germany, Spain, Belgium, Austria, Italy, Netherlands, Ireland, France, Switzerland, Greece, Turkey, UK, Poland, Portugal, Czech Republic, Slovakia, Cyprus, Luxembourg, Sweden, Denmark, Norway, Finland, Iceland, USA, Canada, Japan, South Korea, Singapore, Australia and New Zealand. The passport, valid national licence and two photographs are also required.
                            </p>
                            <p>Driving in the UAE is on the right-hand side.</p>  
                        </div>
                    </li>                     
                </ul>
            </div>
        </div>
    </div>                                       
    
@endsection