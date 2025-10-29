<section class="py-20 bg-gradient-to-br from-blue-50 to-purple-50">
  <div class="container mx-auto px-4">
    
    <div class="text-center mb-16">
      <h2 class="mb-4 text-3xl font-bold">Frequently Asked Questions</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Everything you need to know about our finance tracking app
      </p>
    </div>

    <div class="max-w-3xl mx-auto space-y-4">
      
      <!-- FAQ ITEM -->
      <div class="bg-white rounded-xl border border-gray-200 px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
        <button onclick="toggleFAQ(1)" class="flex justify-between w-full text-left font-medium text-lg">
          <span>How does the free trial work?</span>
          <span id="icon-1" class="text-xl">+</span>
        </button>
        <p id="faq-1" class="hidden text-gray-600 mt-3">
          All plans include a 14-day free trial with full access to all features. No credit card required to start.
        </p>
      </div>

      <div class="bg-white rounded-xl border border-gray-200 px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
        <button onclick="toggleFAQ(2)" class="flex justify-between w-full text-left font-medium text-lg">
          <span>Can I change my plan later?</span>
          <span id="icon-2" class="text-xl">+</span>
        </button>
        <p id="faq-2" class="hidden text-gray-600 mt-3">
          Yes! You can upgrade or downgrade your plan at any time.
        </p>
      </div>

      <div class="bg-white rounded-xl border border-gray-200 px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
        <button onclick="toggleFAQ(3)" class="flex justify-between w-full text-left font-medium text-lg">
          <span>Is my financial data secure?</span>
          <span id="icon-3" class="text-xl">+</span>
        </button>
        <p id="faq-3" class="hidden text-gray-600 mt-3">
          We use 256-bit encryption and secure servers to protect all data.
        </p>
      </div>

      <div class="bg-white rounded-xl border border-gray-200 px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
        <button onclick="toggleFAQ(4)" class="flex justify-between w-full text-left font-medium text-lg">
          <span>Can I connect multiple bank accounts?</span>
          <span id="icon-4" class="text-xl">+</span>
        </button>
        <p id="faq-4" class="hidden text-gray-600 mt-3">
          Yes! Basic supports 2 accounts, Pro & Premium offer unlimited.
        </p>
      </div>

      <div class="bg-white rounded-xl border border-gray-200 px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
        <button onclick="toggleFAQ(5)" class="flex justify-between w-full text-left font-medium text-lg">
          <span>What payment methods do you accept?</span>
          <span id="icon-5" class="text-xl">+</span>
        </button>
        <p id="faq-5" class="hidden text-gray-600 mt-3">
          We accept Visa, MasterCard, American Express, and PayPal.
        </p>
      </div>

      <div class="bg-white rounded-xl border border-gray-200 px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
        <button onclick="toggleFAQ(6)" class="flex justify-between w-full text-left font-medium text-lg">
          <span>Can I export my data?</span>
          <span id="icon-6" class="text-xl">+</span>
        </button>
        <p id="faq-6" class="hidden text-gray-600 mt-3">
          Yes! All plans include CSV export, Pro includes PDF reports.
        </p>
      </div>

      <!-- CTA CARD -->
      <div class="mt-12 text-center bg-white rounded-2xl p-8 border border-gray-200 shadow-lg">
        <h3 class="mb-2 text-xl font-semibold">Still have questions?</h3>
        <p class="text-gray-600 mb-6">
          Can't find the answer you're looking for? Our support team is here to help.
        </p>
        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 text-white hover:from-blue-700 hover:to-purple-700 transition-colors">
          Contact Support
        </a>
      </div>

    </div>
  </div>
</section>
<script>
function toggleFAQ(id) {
  const answer = document.getElementById(`faq-${id}`);
  const icon = document.getElementById(`icon-${id}`);

  answer.classList.toggle("hidden");
  icon.textContent = icon.textContent === "+" ? "−" : "+";
}
</script>
