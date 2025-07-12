<x-layouts.app :title="__('Refund')">   
 
  <!-- Header Section -->
  <section class="py-12 bg-white shadow">
    <div class="container mx-auto px-4" data-aos="fade-down">
      <h1 class="text-3xl md:text-4xl font-bold mb-4 text-center text-red-600">Federal and State Tax Filing</h1>
      <p class="text-center text-lg max-w-3xl mx-auto">
        At <strong>[Your Company Name]</strong>, we take pride in delivering accurate, compliant, and savings-maximized tax filing services.
      </p>
    </div>
  </section>

  <!-- About and Credentials -->
  <section class="py-12">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
      <div data-aos="fade-right">
        <h2 class="text-2xl font-semibold mb-4">Why Choose Us?</h2>
        <ul class="list-disc pl-5 space-y-2">
          <li>Registered EROs complying with IRS guidelines & Circular 230</li>
          <li>Team of CPAs, EAs, CAs & PTIN-certified experts</li>
          <li>Proactive support for changing tax laws and regulations</li>
        </ul>
      </div>
      <div data-aos="fade-left">
        <img src="https://cdn-icons-png.flaticon.com/512/1256/1256650.png" alt="Tax Filing Icon" class="w-64 mx-auto" />
      </div>
    </div>
  </section>

  <!-- Services List -->
  <section class="bg-white py-12">
    <div class="container mx-auto px-4" data-aos="fade-up">
      <h2 class="text-2xl font-semibold mb-6 text-center">Comprehensive Tax Filing Services</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gray-100 p-5 rounded-lg shadow" data-aos="fade-up">
          <h3 class="font-semibold mb-2">W-4 Assistance</h3>
          <p>Expert guidance to optimize tax withholding.</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow" data-aos="fade-up">
          <h3 class="font-semibold mb-2">ITIN Application</h3>
          <p>Help with Form W-7 and document processing.</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow" data-aos="fade-up">
          <h3 class="font-semibold mb-2">Passport Certification</h3>
          <p>Certified support for IRS identity verification.</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow" data-aos="fade-up">
          <h3 class="font-semibold mb-2">Federal & State Returns</h3>
          <p>1040/1040NR filing for both residents and non-residents.</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow" data-aos="fade-up">
          <h3 class="font-semibold mb-2">Amended Returns</h3>
          <p>Quick 1040X filing for previous return corrections.</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow" data-aos="fade-up">
          <h3 class="font-semibold mb-2">FBAR & FATCA</h3>
          <p>Expert help with foreign asset reporting compliance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Process -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4" data-aos="zoom-in">
      <h2 class="text-2xl font-semibold text-center mb-6">Our Filing Process</h2>
      <ol class="list-decimal pl-6 max-w-3xl mx-auto space-y-3">
        <li><strong>Detailed Analysis:</strong> We review every document to capture all deductions.</li>
        <li><strong>Quality Assurance:</strong> Multi-level review for 100% accuracy.</li>
        <li><strong>Electronic Signature:</strong> E-signed by IRS-authorized preparers.</li>
        <li><strong>Expedited Non-Resident Filing:</strong> Fast-tracked paper submissions.</li>
      </ol>
    </div>
  </section>

  <!-- Tax Planning -->
  <section class="py-12">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
      <div data-aos="fade-right">
        <h2 class="text-2xl font-semibold mb-4">Advanced Tax Planning</h2>
        <ul class="list-disc pl-5 space-y-2">
          <li>Itemized vs. Standard Deduction Review</li>
          <li>ESOP & ESPP Tax Strategies</li>
          <li>Rental Income/Loss Planning</li>
          <li>Investment Advice (401k, IRA)</li>
        </ul>
      </div>
      <div data-aos="fade-left">
        <img src="https://cdn-icons-png.flaticon.com/512/2387/2387635.png" alt="Planning" class="w-64 mx-auto" />
      </div>
    </div>
  </section>

  <!-- Special Offers -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4" data-aos="fade-up">
      <h2 class="text-2xl font-semibold text-center mb-4">Special Offers</h2>
      <div class="flex flex-col md:flex-row justify-center items-center gap-8 text-center">
        <div class="bg-red-100 p-6 rounded shadow-md w-full md:w-1/2" data-aos="flip-left">
          <h3 class="font-bold text-xl mb-2">Free Refund Estimate</h3>
          <p>Quick estimate within 24–36 hrs for TY2024</p>
        </div>
        <div class="bg-blue-100 p-6 rounded shadow-md w-full md:w-1/2" data-aos="flip-right">
          <h3 class="font-bold text-xl mb-2">3-Year Tax Evaluation</h3>
          <p>Free review of filings from TY2022–2024</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Services Footer -->
  <section class="py-12 bg-gray-800 text-white">
    <div class="container mx-auto px-4 text-center" data-aos="fade-up">
      <h2 class="text-xl font-semibold mb-4">Key Services</h2>
      <div class="flex flex-wrap justify-center gap-4 text-sm">
        <span>✔ Federal & State Filing</span>
        <span>✔ Tax Representation</span>
        <span>✔ ITIN Services</span>
        <span>✔ FBAR & FATCA Compliance</span>
        <span>✔ Amendments & Planning</span>
      </div>
      <p class="mt-4 text-gray-300">Trust [Your Company Name] for accurate, secure, and professional tax services.</p>
    </div>
  </section>

</x-layouts.app>
