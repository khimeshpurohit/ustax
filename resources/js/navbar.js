const toggleBtn = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');
const overlay = document.getElementById('overlay');
const hamburger = document.getElementById('hamburger-icon');
const close = document.getElementById('close-icon');

const desktopToggle = document.getElementById('desktop-services-toggle');
const desktopDropdown = document.getElementById('desktop-dropdown');
const desktopArrow = document.getElementById('desktop-arrow');
const desktopWrapper = document.getElementById('desktop-services-wrapper');

const mobileToggle = document.getElementById('mobile-services-toggle');
const mobileDropdown = document.getElementById('mobile-dropdown');
const mobileArrow = document.getElementById('mobile-arrow');
const mobileWrapper = document.getElementById('mobile-services-wrapper');
// === Mobile Nested Dropdown ===
const mobileNestedToggle = document.getElementById('mobile-nested-toggle');
const mobileNestedDropdown = document.getElementById('mobile-nested-dropdown');
const mobileNestedArrow = document.getElementById('mobile-nested-arrow');
const mobileNestedWrapper = document.getElementById('mobile-nested-wrapper');

mobileNestedToggle.addEventListener('click', (e) => {
e.stopPropagation();
const isHidden = mobileNestedDropdown.classList.contains('hidden');
if (isHidden) {
showDropdown(mobileNestedDropdown);
mobileNestedArrow.classList.add('rotate-180');
} else {
hideDropdown(mobileNestedDropdown);
mobileNestedArrow.classList.remove('rotate-180');
}
});

// === Close Nested Dropdown on Outside Click ===
document.addEventListener('click', (e) => {
if (!mobileNestedWrapper.contains(e.target)) {
hideDropdown(mobileNestedDropdown);
mobileNestedArrow.classList.remove('rotate-180');
}
});

// === ESC Key Closes Nested Dropdown Too ===
document.addEventListener('keydown', (e) => {
if (e.key === "Escape") {
hideDropdown(mobileNestedDropdown);
mobileNestedArrow.classList.remove('rotate-180');
}
});

function showDropdown(dropdown) {
  dropdown.classList.remove('hidden', 'opacity-0');
  dropdown.classList.add('opacity-100');
}

function hideDropdown(dropdown) {
  dropdown.classList.add('opacity-0');
  setTimeout(() => dropdown.classList.add('hidden'), 150);
}

toggleBtn.addEventListener('click', () => {
  menu.classList.toggle('translate-x-full');
  overlay.classList.toggle('hidden');
  hamburger.classList.toggle('hidden');
  close.classList.toggle('hidden');
});

overlay.addEventListener('click', () => {
  menu.classList.add('translate-x-full');
  overlay.classList.add('hidden');
  hamburger.classList.remove('hidden');
  close.classList.add('hidden');
});

desktopToggle.addEventListener('click', (e) => {
  e.stopPropagation();
  const isHidden = desktopDropdown.classList.contains('hidden');
  if (isHidden) {
    showDropdown(desktopDropdown);
    desktopArrow.classList.add('rotate-180');
  } else {
    hideDropdown(desktopDropdown);
    desktopArrow.classList.remove('rotate-180');
  }
});

mobileToggle.addEventListener('click', (e) => {
  e.stopPropagation();
  const isHidden = mobileDropdown.classList.contains('hidden');
  if (isHidden) {
    showDropdown(mobileDropdown);
    mobileArrow.classList.add('rotate-180');
  } else {
    hideDropdown(mobileDropdown);
    mobileArrow.classList.remove('rotate-180');
  }
});

document.addEventListener('click', (e) => {
  if (!desktopWrapper.contains(e.target)) {
    hideDropdown(desktopDropdown);
    desktopArrow.classList.remove('rotate-180');
  }
  if (!mobileWrapper.contains(e.target)) {
    hideDropdown(mobileDropdown);
    mobileArrow.classList.remove('rotate-180');
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === "Escape") {
    hideDropdown(desktopDropdown);
    desktopArrow.classList.remove('rotate-180');
    hideDropdown(mobileDropdown);
    mobileArrow.classList.remove('rotate-180');

    menu.classList.add('translate-x-full');
    overlay.classList.add('hidden');
    hamburger.classList.remove('hidden');
    close.classList.add('hidden');
  }
});