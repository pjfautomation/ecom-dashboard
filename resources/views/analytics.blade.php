<!DOCTYPE html>

<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><meta content="web_dashboard" name="shell-type"/><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "tertiary": "#8c5000", "primary-container": "#06b6d4", "on-error": "#ffffff", "on-secondary-fixed": "#111c2d", "on-primary-container": "#00424f", "on-tertiary-fixed": "#2d1600", "on-tertiary-container": "#5b3200", "on-primary-fixed-variant": "#004e5c", "surface-container-low": "#eff4ff", "inverse-on-surface": "#eaf1ff", "surface-variant": "#d9e3f6", "secondary-fixed": "#d8e3fb", "on-secondary-container": "#586377", "tertiary-fixed": "#ffdcbf", "on-secondary": "#ffffff", "outline-variant": "#bcc9cd", "surface-dim": "#d0dbed", "on-error-container": "#93000a", "on-secondary-fixed-variant": "#3c475a", "on-surface-variant": "#3d494c", "on-tertiary": "#ffffff", "primary": "#00687a", "inverse-surface": "#27313f", "inverse-primary": "#4cd7f6", "secondary-container": "#d5e0f8", "error": "#ba1a1a", "outline": "#6d797d", "background": "#f8f9ff", "surface-bright": "#f8f9ff", "surface-container-lowest": "#ffffff", "surface-container-high": "#dee9fc", "on-primary": "#ffffff", "primary-fixed": "#acedff", "on-primary-fixed": "#001f26", "surface": "#f8f9ff", "surface-container-highest": "#d9e3f6", "surface-tint": "#00687a", "surface-container": "#e6eeff", "error-container": "#ffdad6", "secondary": "#545f73", "on-tertiary-fixed-variant": "#6a3b00", "secondary-fixed-dim": "#bcc7de", "tertiary-container": "#e89337", "primary-fixed-dim": "#4cd7f6", "tertiary-fixed-dim": "#ffb873", "on-background": "#121c2a", "on-surface": "#121c2a" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-sm": "0.5rem", "space-lg": "1.5rem", "gutter": "1.5rem", "space-xs": "0.25rem", "margin": "2rem", "margin-mobile": "1rem", "space-xl": "2rem", "gutter-sm": "1rem", "space-md": "1rem" }, "fontFamily": { "body-lg": [ "Plus Jakarta Sans" ], "headline-sm": [ "Plus Jakarta Sans" ], "label-md": [ "Plus Jakarta Sans" ], "display-lg": [ "Plus Jakarta Sans" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-lg": [ "Plus Jakarta Sans" ], "headline-md": [ "Plus Jakarta Sans" ], "label-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ] }, "fontSize": { "body-lg": [ "16px", { "lineHeight": "24px", "fontWeight": "400" } ], "headline-sm": [ "16px", { "lineHeight": "24px", "fontWeight": "600" } ], "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600" } ], "display-lg": [ "32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "body-sm": [ "12px", { "lineHeight": "16px", "fontWeight": "400" } ], "headline-lg": [ "24px", { "lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "600" } ], "headline-md": [ "20px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" } ], "label-lg": [ "14px", { "lineHeight": "20px", "fontWeight": "600" } ], "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "body-md": [ "14px", { "lineHeight": "20px", "fontWeight": "400" } ] } } } };</script><style>
@media (max-width: 1023px) {
  #app-sidebar { transform: translateX(-100%); transition: transform .25s ease; }
  #app-sidebar.is-open { transform: translateX(0); }
  .pl-60 { padding-left: 0 !important; }
  header { left: 0 !important; }
  #sidebar-toggle { display: grid; }
}
#sidebar-toggle { display: none; }
@media (max-width: 1023px) { #sidebar-toggle { display: grid; } }
</style></head><body class="bg-[#F5F6F8] font-body-md text-on-surface antialiased min-h-screen"><button id="sidebar-toggle" type="button" class="fixed left-4 top-4 z-[80] h-10 w-10 place-items-center rounded-xl border border-[#E5E7EB] bg-white text-secondary shadow-lg" aria-label="Toggle sidebar" title="Toggle sidebar"><span class="material-symbols-outlined">menu</span></button><aside id="app-sidebar" class="fixed left-0 top-0 h-screen w-60 bg-surface-container-lowest border-r border-[#E5E7EB] z-50 flex flex-col justify-between select-none"><div class="flex flex-col"><div class="h-24 px-5 flex items-center gap-3 border-b border-[#E5E7EB]/60"><div class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-[#f1f4f6] p-1"><img alt="Thread &amp; Co logo" class="h-full w-full object-contain" src="{{ asset('images/thread-co-logo.png') }}"/></div><span class="font-headline-sm text-headline-sm text-on-surface tracking-tight">Thread &amp; Co</span></div><nav class="px-space-md py-space-lg flex flex-col gap-1" data-active-classes="bg-[#1E293B] text-white font-label-lg rounded-xl"><a class="flex items-center gap-space-sm px-space-md py-2.5 rounded-xl font-label-lg text-label-lg text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" data-path="overview" href="/"><span class="material-symbols-outlined text-[20px]">dashboard</span><span>Overview</span></a><a class="flex items-center gap-space-sm px-space-md py-2.5 rounded-xl font-label-lg text-label-lg text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" data-path="orders" href="/orders"><span class="material-symbols-outlined text-[20px]">shopping_bag</span><span>Orders</span></a><a class="flex items-center gap-space-sm px-space-md py-2.5 rounded-xl font-label-lg text-label-lg text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" data-path="products" href="/products"><span class="material-symbols-outlined text-[20px]">checkroom</span><span>Products</span></a><a class="flex items-center gap-space-sm px-space-md py-2.5 rounded-xl font-label-lg text-label-lg text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" data-path="customers" href="/customers"><span class="material-symbols-outlined text-[20px]">group</span><span>Customers</span></a><a aria-current="page" class="flex items-center gap-space-sm px-space-md py-2.5 transition-colors bg-[#1E293B] text-white font-label-lg rounded-xl" data-path="analytics" href="/analytics"><span class="material-symbols-outlined text-[20px]">analytics</span><span>Analytics</span></a><a class="flex items-center gap-space-sm px-space-md py-2.5 rounded-xl font-label-lg text-label-lg text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" data-path="marketing" href="/marketing"><span class="material-symbols-outlined text-[20px]">campaign</span><span>Marketing</span></a><a class="flex items-center gap-space-sm px-space-md py-2.5 rounded-xl font-label-lg text-label-lg text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" data-path="settings" href="/settings"><span class="material-symbols-outlined text-[20px]">settings</span><span>Settings</span></a></nav></div><div class="p-space-md border-t border-[#E5E7EB]/60"><a class="flex items-center justify-between px-space-md py-2.5 rounded-xl font-label-md text-label-md text-[#6B7280] hover:bg-[#F3F4F6] hover:text-on-surface transition-colors" href="#" target="_blank"><span>View Live Store</span><span class="material-symbols-outlined text-[18px]">open_in_new</span></a></div></aside><div class="pl-60"><header class="fixed top-0 left-60 right-0 h-20 bg-surface-container-lowest/95 backdrop-blur-md border-b border-[#E5E7EB] z-40 px-6 lg:px-10 flex items-center justify-between gap-6"><div class="flex min-w-0 flex-1 items-center"><h2 class="truncate font-headline-sm text-headline-sm text-on-surface">Analytics</h2></div><div class="flex shrink-0 items-center gap-3 lg:gap-5"><div class="flex items-center gap-2 px-3.5 py-2 bg-surface-container-lowest border border-[#E5E7EB] rounded-full text-secondary"><span class="material-symbols-outlined text-[18px]">search</span><span class="font-body-sm text-body-sm text-secondary hidden sm:inline">Search analytics...</span></div><button id="notifications-button" type="button" class="relative w-10 h-10 rounded-full flex items-center justify-center text-secondary hover:bg-[#F3F4F6]"><span class="material-symbols-outlined text-[20px]">notifications</span><span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error"></span></button><div class="relative border-l border-[#E5E7EB] pl-3"><button id="profile-button" type="button" class="flex items-center gap-2 rounded-full p-1 hover:bg-[#F3F4F6]"><img alt="Profile" class="w-9 h-9 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFmkXMrn_7ixpAdQlDIVfe8lp5C5CNsa8QddYeeOLQx0fIURK85fmcg8J6URe1oqTrjrGE4PF70o90DX_V_RVCYB2aF03VKJB4VGmLuR0dETraHI0-b0FLK-GHgNPWzVUaGUu5gTQAt4Cw0c47P9blvDOwSdzczTirv4-2ilrS0NO83YxKw0kw8ofjovwbmdy0cnAi_snOYrU9XNfJ0quHR9026Xu6O7nEcDJT_NAEGfGooNfYuqKf"/><span class="material-symbols-outlined text-[18px] text-secondary">expand_more</span></button></div></div></header><main class="relative pt-24 w-full min-h-screen px-space-xl py-8 bg-[#F5F6F8]"><div class="flex flex-col w-full gap-space-lg">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
<div class="flex flex-col">
<h1 class="font-headline-lg text-headline-lg text-on-surface">Analytics</h1>
<p class="font-body-md text-body-md text-secondary">Deep-dive sales trajectories, category breakdowns, and product performance.</p>
</div>
<div class="flex flex-wrap items-center gap-space-sm">
<div class="relative">
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest rounded-full shadow-sm text-on-surface font-label-md text-label-md hover:bg-surface-container-low transition-colors" id="dateRangeBtn">
<span class="material-symbols-outlined text-[18px] text-secondary">calendar_month</span>
<span id="dateRangeLabel">Last 30 Days</span>
<span class="material-symbols-outlined text-[16px] text-secondary">expand_more</span>
</button>
<div class="hidden absolute right-0 mt-2 w-48 bg-surface-container-lowest rounded-xl shadow-xl py-1.5 z-30" id="dateRangeMenu">
<button class="w-full text-left px-4 py-2 font-label-md text-label-md text-on-surface hover:bg-surface-container-low transition-colors" data-range="Last 7 Days">Last 7 Days</button>
<button class="w-full text-left px-4 py-2 font-label-md text-label-md text-primary font-semibold hover:bg-surface-container-low transition-colors" data-range="Last 30 Days">Last 30 Days</button>
<button class="w-full text-left px-4 py-2 font-label-md text-label-md text-on-surface hover:bg-surface-container-low transition-colors" data-range="Last 90 Days">Last 90 Days</button>
</div>
</div>
<div class="flex items-center gap-2 px-3.5 py-1.5 bg-surface-container-lowest rounded-full shadow-sm">
<label class="font-label-md text-label-md text-secondary cursor-pointer select-none" for="compareToggle">vs. Previous Period</label>
<button aria-checked="true" class="w-9 h-5 bg-primary-container rounded-full relative transition-colors focus:outline-none" id="compareToggle" role="switch">
<span class="block w-3.5 h-3.5 bg-surface-container-lowest rounded-full shadow-sm absolute top-0.75 right-0.75 transition-all"></span>
</button>
</div>
<button class="flex items-center gap-2 px-4 py-2 bg-primary-container text-on-primary font-label-md text-label-md rounded-full shadow-sm hover:brightness-95 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Download PDF Report</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-secondary">Total Revenue</span>
<div class="w-11 h-11 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
<span class="material-symbols-outlined text-[22px]">trending_up</span>
</div>
</div>
<div class="mt-4 flex flex-col gap-1.5">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">$148,920.00</span>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span>+14.2%
          </span>
<span class="font-body-sm text-body-sm text-secondary">vs previous 30 days</span>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-secondary">Total Orders</span>
<div class="w-11 h-11 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined text-[22px]">shopping_bag</span>
</div>
</div>
<div class="mt-4 flex flex-col gap-1.5">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">1,642</span>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span>+8.6%
          </span>
<span class="font-body-sm text-body-sm text-secondary">vs previous 30 days</span>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-secondary">Average Order Value</span>
<div class="w-11 h-11 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
<span class="material-symbols-outlined text-[22px]">payments</span>
</div>
</div>
<div class="mt-4 flex flex-col gap-1.5">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">$90.69</span>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span>+$4.80
          </span>
<span class="font-body-sm text-body-sm text-secondary">from last month</span>
</div>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col gap-space-lg">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
<div class="flex flex-col">
<h2 class="font-headline-md text-headline-md text-on-surface">Sales Over Time</h2>
<span class="font-body-sm text-body-sm text-secondary">Daily gross merchandise sales comparison</span>
</div>
<div class="flex items-center gap-3">
<div class="flex items-center bg-surface-container-low p-1 rounded-full font-label-md text-label-md">
<button class="px-3.5 py-1.5 rounded-full bg-surface-container-lowest text-on-surface shadow-sm font-semibold">Revenue</button>
<button class="px-3.5 py-1.5 rounded-full text-secondary hover:text-on-surface transition-colors">Orders</button>
<button class="px-3.5 py-1.5 rounded-full text-secondary hover:text-on-surface transition-colors">Conversion</button>
</div>
<div class="hidden md:flex items-center gap-4 pl-3">
<div class="flex items-center gap-1.5">
<span class="w-3 h-3 rounded-full bg-primary-container"></span>
<span class="font-label-sm text-label-sm text-secondary">Current</span>
</div>
<div class="flex items-center gap-1.5">
<span class="w-3 h-0.5 bg-secondary-container"></span>
<span class="font-label-sm text-label-sm text-secondary">Previous</span>
</div>
</div>
</div>
</div>
<div class="relative w-full h-[320px] select-none">
<div class="absolute left-0 top-0 bottom-6 flex flex-col justify-between text-right pr-3 font-label-sm text-label-sm text-secondary pointer-events-none">
<span>$8k</span>
<span>$6k</span>
<span>$4k</span>
<span>$2k</span>
<span>$0</span>
</div>
<div class="ml-12 h-full flex flex-col justify-between">
<div class="relative w-full h-[280px]">
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 1000 280">
<defs>
<lineargradient id="areaGradTeal" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#06B6D4" stop-opacity="0.28"></stop>
<stop offset="100%" stop-color="#06B6D4" stop-opacity="0.0"></stop>
</lineargradient>
</defs>
<line stroke="#E5E7EB" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="20" y2="20"></line>
<line stroke="#E5E7EB" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="85" y2="85"></line>
<line stroke="#E5E7EB" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="150" y2="150"></line>
<line stroke="#E5E7EB" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="215" y2="215"></line>
<line stroke="#E5E7EB" stroke-width="1" x1="0" x2="1000" y1="280" y2="280"></line>
<path id="previous-series" d="M 0,220 C 120,200 180,240 280,180 C 380,120 460,190 560,140 C 660,90 760,160 860,130 C 930,110 970,125 1000,105" fill="none" stroke="#9CA3AF" stroke-dasharray="5 5" stroke-width="2"></path>
<path d="M 0,200 C 100,160 180,210 280,130 C 380,50 480,110 580,80 C 680,50 780,100 880,45 C 940,20 980,55 1000,30 L 1000,280 L 0,280 Z" fill="url(#areaGradTeal)"></path>
<path d="M 0,200 C 100,160 180,210 280,130 C 380,50 480,110 580,80 C 680,50 780,100 880,45 C 940,20 980,55 1000,30" fill="none" stroke="#06B6D4" stroke-linecap="round" stroke-width="3"></path>
<line stroke="#06B6D4" stroke-dasharray="2 2" stroke-width="1.5" x1="680" x2="680" y1="0" y2="280"></line>
<circle cx="680" cy="50" fill="#FFFFFF" r="5.5" stroke="#06B6D4" stroke-width="3"></circle>
<circle id="previous-marker" cx="680" cy="115" fill="#FFFFFF" r="4.5" stroke="#9CA3AF" stroke-width="2.5"></circle>
</svg>
<div class="absolute left-[68%] -top-3 -translate-x-1/2 bg-surface-container-lowest rounded-xl shadow-xl p-3 z-20 pointer-events-none flex flex-col gap-1 w-44">
<span class="font-label-sm text-label-sm text-secondary">Oct 18, 2024</span>
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface">Current:</span>
<span class="font-headline-sm text-headline-sm text-primary">$6,840.00</span>
</div>
<div class="flex items-center justify-between text-secondary">
<span id="previous-tooltip-row" class="font-label-sm text-label-sm">Previous:</span>
<span class="font-label-md text-label-md text-secondary">$4,920.00</span>
</div>
<div class="mt-1 pt-1 border-t border-surface-container-high flex items-center justify-between text-emerald-600 font-label-sm text-label-sm">
<span>Variance</span>
<span>+39.0%</span>
</div>
</div>
</div>
<div class="flex justify-between font-label-sm text-label-sm text-secondary pt-2">
<span>Oct 01</span>
<span>Oct 06</span>
<span>Oct 11</span>
<span>Oct 16</span>
<span>Oct 21</span>
<span>Oct 26</span>
<span>Oct 31</span>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-space-lg">
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex flex-col mb-space-md">
<h3 class="font-headline-md text-headline-md text-on-surface">Best Selling Products</h3>
<span class="font-body-sm text-body-sm text-secondary">Top 5 apparel items by gross volume</span>
</div>
<div class="flex flex-col gap-4">
<div class="flex flex-col gap-1.5">
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2.5 min-w-0">
<span class="w-5 text-secondary font-label-sm text-label-sm">#1</span>
<span class="font-semibold text-on-surface truncate">Heavyweight French Terry Hoodie</span>
</div>
<div class="flex items-center gap-3 shrink-0">
<span class="text-secondary font-body-sm text-body-sm">412 sold</span>
<span class="text-on-surface font-semibold">$36,256</span>
</div>
</div>
<div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary-container rounded-full w-full"></div>
</div>
</div>
<div class="flex flex-col gap-1.5">
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2.5 min-w-0">
<span class="w-5 text-secondary font-label-sm text-label-sm">#2</span>
<span class="font-semibold text-on-surface truncate">Japanese Selvedge Denim Jacket</span>
</div>
<div class="flex items-center gap-3 shrink-0">
<span class="text-secondary font-body-sm text-body-sm">148 sold</span>
<span class="text-on-surface font-semibold">$28,860</span>
</div>
</div>
<div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary-container rounded-full w-[80%]"></div>
</div>
</div>
<div class="flex flex-col gap-1.5">
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2.5 min-w-0">
<span class="w-5 text-secondary font-label-sm text-label-sm">#3</span>
<span class="font-semibold text-on-surface truncate">280GSM Boxy Drop-Shoulder Tee</span>
</div>
<div class="flex items-center gap-3 shrink-0">
<span class="text-secondary font-body-sm text-body-sm">520 sold</span>
<span class="text-on-surface font-semibold">$21,840</span>
</div>
</div>
<div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary-container rounded-full w-[60%]"></div>
</div>
</div>
<div class="flex flex-col gap-1.5">
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2.5 min-w-0">
<span class="w-5 text-secondary font-label-sm text-label-sm">#4</span>
<span class="font-semibold text-on-surface truncate">Relaxed Pleated Utility Trouser</span>
</div>
<div class="flex items-center gap-3 shrink-0">
<span class="text-secondary font-body-sm text-body-sm">164 sold</span>
<span class="text-on-surface font-semibold">$19,352</span>
</div>
</div>
<div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary-container rounded-full w-[53%]"></div>
</div>
</div>
<div class="flex flex-col gap-1.5">
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2.5 min-w-0">
<span class="w-5 text-secondary font-label-sm text-label-sm">#5</span>
<span class="font-semibold text-on-surface truncate">Merino Wool Waffle Crewneck</span>
</div>
<div class="flex items-center gap-3 shrink-0">
<span class="text-secondary font-body-sm text-body-sm">92 sold</span>
<span class="text-on-surface font-semibold">$12,420</span>
</div>
</div>
<div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary-container rounded-full w-[34%]"></div>
</div>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex flex-col mb-space-md">
<h3 class="font-headline-md text-headline-md text-on-surface">Sales by Category</h3>
<span class="font-body-sm text-body-sm text-secondary">Revenue distribution across apparel departments</span>
</div>
<div class="flex flex-col gap-space-md">
<div class="w-full h-4 rounded-full overflow-hidden flex shadow-inner bg-surface-container-low">
<div class="h-full bg-primary-container" style="width: 38%"></div>
<div class="h-full bg-blue-500" style="width: 26%"></div>
<div class="h-full bg-emerald-500" style="width: 18%"></div>
<div class="h-full bg-amber-500" style="width: 12%"></div>
<div class="h-full bg-purple-500" style="width: 6%"></div>
</div>
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary-container"></span>
<span class="text-on-surface">Hoodies &amp; Sweatshirts</span>
</div>
<div class="flex items-center gap-3">
<span class="text-secondary font-body-sm text-body-sm">38%</span>
<span class="text-on-surface font-semibold">$56,589</span>
</div>
</div>
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-blue-500"></span>
<span class="text-on-surface">Denim &amp; Outerwear</span>
</div>
<div class="flex items-center gap-3">
<span class="text-secondary font-body-sm text-body-sm">26%</span>
<span class="text-on-surface font-semibold">$38,719</span>
</div>
</div>
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-emerald-500"></span>
<span class="text-on-surface">Tees &amp; Basics</span>
</div>
<div class="flex items-center gap-3">
<span class="text-secondary font-body-sm text-body-sm">18%</span>
<span class="text-on-surface font-semibold">$26,805</span>
</div>
</div>
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-amber-500"></span>
<span class="text-on-surface">Trousers &amp; Pants</span>
</div>
<div class="flex items-center gap-3">
<span class="text-secondary font-body-sm text-body-sm">12%</span>
<span class="text-on-surface font-semibold">$17,870</span>
</div>
</div>
<div class="flex items-center justify-between font-label-md text-label-md">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-purple-500"></span>
<span class="text-on-surface">Accessories &amp; Headwear</span>
</div>
<div class="flex items-center gap-3">
<span class="text-secondary font-body-sm text-body-sm">6%</span>
<span class="text-on-surface font-semibold">$8,935</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
  const dateBtn = document.getElementById('dateRangeBtn');
  const dateMenu = document.getElementById('dateRangeMenu');
  const dateLabel = document.getElementById('dateRangeLabel');
  const compareToggle = document.getElementById('compareToggle');

  dateBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    dateMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', () => {
    dateMenu.classList.add('hidden');
  });

  dateMenu.querySelectorAll('button').forEach((btn) => {
    btn.addEventListener('click', () => {
      dateLabel.textContent = btn.getAttribute('data-range');
      dateMenu.classList.add('hidden');
    });
  });

  compareToggle.addEventListener('click', () => {
    const isChecked = compareToggle.getAttribute('aria-checked') === 'true';
    document.getElementById('previous-series').style.opacity = isChecked ? '0' : '0.8';
    document.getElementById('previous-marker').style.opacity = isChecked ? '0' : '1';
    document.getElementById('previous-tooltip-row').parentElement.classList.toggle('opacity-40', isChecked);
    compareToggle.setAttribute('aria-checked', String(!isChecked));
    const circle = compareToggle.querySelector('span');
    if (!isChecked) {
      compareToggle.classList.remove('bg-surface-container-highest');
      compareToggle.classList.add('bg-primary-container');
      circle.style.right = '0.1875rem';
      circle.style.left = 'auto';
    } else {
      compareToggle.classList.remove('bg-primary-container');
      compareToggle.classList.add('bg-surface-container-highest');
      circle.style.left = '0.1875rem';
      circle.style.right = 'auto';
    }
  });
</script></main></div><div id="shared-notifications-menu" class="fixed right-20 top-20 z-[70] hidden w-72 rounded-xl border border-[#E5E7EB] bg-white p-3 shadow-xl"><div class="flex items-center justify-between border-b border-[#E5E7EB] pb-2"><b class="text-sm">Notifications</b><button id="shared-mark-read" type="button" class="text-xs text-primary hover:underline">Mark all read</button></div><button type="button" class="mt-2 flex w-full gap-2 rounded-lg p-2 text-left text-xs hover:bg-[#F3F4F6]"><span class="material-symbols-outlined text-base text-tertiary">inventory_2</span><span><b>Low stock alert</b><br><span class="text-secondary">Heavyweight Hoodie has 6 left.</span></span></button><button type="button" class="flex w-full gap-2 rounded-lg p-2 text-left text-xs hover:bg-[#F3F4F6]"><span class="material-symbols-outlined text-base text-primary">shopping_bag</span><span><b>New order received</b><br><span class="text-secondary">Order #ORD-9842 is ready.</span></span></button></div><div id="shared-profile-menu" class="fixed right-4 top-20 z-[70] hidden w-52 rounded-xl border border-[#E5E7EB] bg-white p-2 shadow-xl"><div class="border-b border-[#E5E7EB] px-3 py-2"><b class="text-sm">Sarah Wilson</b><p class="text-xs text-secondary">Store administrator</p></div><button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-left text-xs hover:bg-[#F3F4F6]"><span class="material-symbols-outlined text-base">person</span>Account settings</button><button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-left text-xs hover:bg-[#F3F4F6]"><span class="material-symbols-outlined text-base">logout</span>Sign out</button></div><script>
(() => {
  const sidebar=document.getElementById('app-sidebar'), toggle=document.getElementById('sidebar-toggle');
  toggle?.addEventListener('click',()=>sidebar.classList.toggle('is-open'));
  const notification=document.getElementById('notifications-button'), profile=document.getElementById('profile-button');
  const notificationMenu=document.getElementById('shared-notifications-menu') || document.getElementById('notifications-menu');
  const profileMenu=document.getElementById('shared-profile-menu') || document.getElementById('profile-menu');
  notification?.addEventListener('click',e=>{e.stopPropagation(); notificationMenu?.classList.toggle('hidden'); profileMenu?.classList.add('hidden');});
  profile?.addEventListener('click',e=>{e.stopPropagation(); profileMenu?.classList.toggle('hidden'); notificationMenu?.classList.add('hidden');});
  document.getElementById('shared-mark-read')?.addEventListener('click',()=>document.getElementById('notification-dot')?.classList.add('hidden'));
  document.addEventListener('click',()=>{notificationMenu?.classList.add('hidden');profileMenu?.classList.add('hidden');});
})();
</script></body></html>











