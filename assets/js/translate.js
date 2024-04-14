// Function to update content based on selected language
function updateContent(langData) {
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        element.textContent = langData[key];

        console.log(element.tagName == 'INPUT');
        console.log(element.hasAttribute('placeholder'));
        if(element.tagName == 'INPUT' && element.hasAttribute('placeholder'))
            element.placeholder = langData[key];
    });

    // html change in lang from selected
}

// Function to set the language preference
function setLanguagePreference(lang) {
    localStorage.setItem('language', lang);
    location.reload();
}

// Function to change language
async function changeLanguage(lang) {
    await setLanguagePreference(lang);

    const langData = await fetchLanguageData(lang);
    updateContent(langData);
}

// Call updateContent() on page load
window.addEventListener('DOMContentLoaded', async () => {
    const userPreferredLanguage = localStorage.getItem('language') || 'fr';
    const langData = await fetchLanguageData(userPreferredLanguage);
    updateContent(langData);
});

// Function to fetch language data
async function fetchLanguageData(lang) {
    const response = await fetch(location.origin + `/languages/${lang}.json`);
    return response.json();
}