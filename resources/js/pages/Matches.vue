<template>
    <div
        class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 text-gray-800  :bg-gray-900  :text-gray-100">
        <!-- Header -->
        <header class="bg-white/90 backdrop-blur-xl shadow-[0_2px_10px_-3px_rgba(0,0,0,0.1)] border-b border-gray-100 px-6 py-3 flex items-center justify-between sticky top-0 z-50 transition-all duration-300 hover:shadow-sm">
    <div class="flex items-center space-x-3 group">
        <!-- Animated logo container -->
        <div class="relative w-10 h-10 group-hover:rotate-[15deg] transition-transform duration-300">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Tunisia.svg"
                alt="Tunisia Logo" class="w-10 h-10 rounded-full object-cover border-[3px] border-white shadow-md" />
            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-full border-2 border-white flex items-center justify-center shadow-sm">
                <span class="text-white text-xs">⚽</span>
            </div>
        </div>
        <!-- Modern text styling -->
        <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">
                Dima Rab7
            </h1>
            <p class="text-xs font-medium text-gray-500/90">AI Football Predictions</p>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <!-- Modern floating action button -->
        <button
             @click="showPremium = true"
             class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition shadow-sm">
             Premium Tips
             </button>

        <!-- Animated hamburger menu -->
        <button class="p-2 group focus:outline-none">
            <div class="w-6 space-y-1.5">
                <span class="block h-0.5 w-6 bg-gray-600 group-hover:bg-gray-900 transition-all duration-300 group-hover:translate-y-1.5 group-hover:rotate-45 origin-center"></span>
                <span class="block h-0.5 w-4 ml-auto bg-gray-600 group-hover:bg-gray-900 transition-all duration-300 group-hover:opacity-0"></span>
                <span class="block h-0.5 w-6 bg-gray-600 group-hover:bg-gray-900 transition-all duration-300 group-hover:-translate-y-1.5 group-hover:-rotate-45 origin-center"></span>
            </div>
        </button>
    </div>
</header>

<!-- Modern & Animated Advanced Filters -->
<div
  class="rounded-2xl bg-white dark:bg-gray-900 shadow-xl ring-1 ring-gray-200 dark:ring-gray-700 p-6 mb-10 transition-all duration-500 hover:shadow-2xl hover:ring-indigo-300"
>
  <!-- Header -->
  <div class="flex items-center justify-between mb-6">
    <div class="flex items-center space-x-3">
      <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-800 rounded-full flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-700 dark:text-indigo-300" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v3a1 1 0 01-.293.707L13 15.414V19a1 1 0 01-.293.707l-2 2A1 1 0 019 21v-5.586L3.293 7.707A1 1 0 013 7V4z" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold text-gray-800 dark:text-white tracking-tight">Advanced Filters</h3>
    </div>

    <button @click="resetFilters"
      class="text-sm px-4 py-1.5 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 rounded-full font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition">
      🔄 Reset All
    </button>
  </div>

  <!-- Filter Inputs Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- League -->
    <div>
      <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">🏆 League</label>
      <div class="relative">
        <select v-model="filters.league"
          class="w-full rounded-xl px-4 py-2 pr-10 text-sm bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-100 focus:ring-2 focus:ring-indigo-500 transition">
          <option value="">All Leagues</option>
          <option v-for="league in availableLeagues" :key="league" :value="league">{{ league }}</option>
        </select>
        <div class="absolute right-3 top-2.5 pointer-events-none">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Prediction Type -->
    <div>
      <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">📊 Prediction Type</label>
      <div class="relative">
        <select v-model="filters.predictionType"
          class="w-full rounded-xl px-4 py-2 pr-10 text-sm bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-100 focus:ring-2 focus:ring-indigo-500 transition">
          <option value="">All Predictions</option>
          <option value="strong home win">Strong Home Win</option>
          <option value="likely away win">Likely Away Win</option>
          <option value="potential draw">Potential Draw</option>
          <option value="closely contested match">Closely Contested</option>
        </select>
        <div class="absolute right-3 top-2.5 pointer-events-none">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Match Date Buttons -->
    <div>
      <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">📅 Match Date</label>
      <div class="flex gap-2">
        <button v-for="option in ['yesterday', 'today', 'tomorrow']" :key="option"
          @click="setDateFilter(option)"
          :class="[
            filters.matchDate === option
              ? 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 border-indigo-400'
              : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-300 dark:border-gray-600',
            'flex-1 text-xs rounded-full border text-center py-1.5 font-semibold transition hover:ring-1 hover:ring-indigo-400'
          ]">
          {{ option.charAt(0).toUpperCase() + option.slice(1) }}
        </button>
      </div>
    </div>
  </div>

  <!-- Time Range -->
  <div class="mt-6">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">🕒 Match Time Range</label>
    <div class="flex flex-col md:flex-row gap-4">
      <div class="flex-1">
        <input type="range" min="0" max="23" v-model.number="filters.startHour"
          class="w-full h-2 rounded bg-gray-200 dark:bg-gray-700 accent-indigo-600" />
        <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">Start: {{ filters.startHour }}:00</p>
      </div>
      <div class="flex-1">
        <input type="range" min="0" max="23" v-model.number="filters.endHour"
          class="w-full h-2 rounded bg-gray-200 dark:bg-gray-700 accent-indigo-600" />
        <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">End: {{ filters.endHour }}:00</p>
      </div>
    </div>
  </div>

  <!-- Advanced Toggle -->
  <div class="text-right mt-4">
    <button @click="showAdvancedFilters = !showAdvancedFilters"
      class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline transition">
      {{ showAdvancedFilters ? '🔽 Hide' : '🔼 Show' }} More Filters
    </button>
  </div>
<!-- Transitioned Advanced Filters -->
<transition name="fade">
  <div
    v-if="showAdvancedFilters"
    class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700 grid grid-cols-1 md:grid-cols-3 gap-6"
  >
    <!-- Odds Range -->
    <div class="md:col-span-3 flex gap-4">
      <div class="flex-1">
        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 block mb-1">📈 Min Odds</label>
        <input type="range" min="1" max="10" step="0.1" v-model.number="filters.minOdds"
          class="w-full h-2 rounded bg-gray-200 dark:bg-gray-700 accent-indigo-600" />
        <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">From: {{ filters.minOdds }}</p>
      </div>
      <div class="flex-1">
        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 block mb-1">📉 Max Odds</label>
        <input type="range" min="1" max="10" step="0.1" v-model.number="filters.maxOdds"
          class="w-full h-2 rounded bg-gray-200 dark:bg-gray-700 accent-indigo-600" />
        <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">To: {{ filters.maxOdds }}</p>
      </div>
    </div>

    <!-- Team Ranking Type -->
    <div>
      <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 block">📊 Ranking Type</label>
      <div class="flex gap-2">
        <button
          v-for="type in ['all', 'topVsTop', 'mismatch']"
          :key="type"
          @click="setRankingFilter(type)"
          :class="[
            filters.rankingType === type
              ? 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 border-indigo-300'
              : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-300 dark:border-gray-600',
            'flex-1 text-xs rounded-full border py-1.5 font-semibold transition hover:ring-1 hover:ring-indigo-300'
          ]"
        >
          {{ type === 'all' ? 'All' : type === 'topVsTop' ? 'Top vs Top' : 'Mismatch' }}
        </button>
      </div>
    </div>

    <!-- Team Search -->
    <div class="md:col-span-2">
      <label class="text-sm font-medium text-gray-700 dark:text-gray-300 block mb-1">🔍 Search Teams</label>
      <div class="relative">
        <input type="text" v-model="filters.teamSearch" placeholder="e.g. Barcelona"
          class="w-full rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 px-4 py-2 text-sm text-gray-800 dark:text-white pl-10 transition focus:ring-2 focus:ring-indigo-500" />
        <div class="absolute left-3 top-2.5 text-gray-400">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Extra Toggles -->
    <div class="md:col-span-3 grid grid-cols-2 md:grid-cols-4 gap-4 mt-2">
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.over25" class="rounded text-indigo-600" />
        ⚽ Over 2.5 Goals
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.gg" class="rounded text-indigo-600" />
        🤝 Both Teams Scored
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.strongWinOdds" class="rounded text-indigo-600" />
        💥 1/2 Win + Odds > 2
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.hasComparison" class="rounded text-indigo-600" />
        📊 Has Comparison
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.bigRankGap" class="rounded text-indigo-600" />
        💣 Big Rank Gap
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.winDiffOver10" class="rounded text-indigo-600" />
        🏆 Win Diff > 10
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.winDiffOver5" class="rounded text-indigo-600" />
        🏆 Win Diff > 5
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.strongGG" class="rounded text-indigo-600" />
        🔥 Strong GG 50+:50+
      </label>
      <label class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <input type="checkbox" v-model="filters.showHotPicks" class="rounded text-indigo-600" />
        🚀 Show HOT Picks Only
      </label>
      <div class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
  <label for="minGDDiff" class="whitespace-nowrap">📈 Min GD Difference</label>
  <input
    type="number"
    id="minGDDiff"
    v-model.number="filters.minGDDiff"
    min="0"
    max="100"
    class="w-20 rounded-md border border-gray-300 dark:border-gray-600 px-2 py-1 text-sm text-gray-800 dark:text-white bg-white dark:bg-gray-800"
  />
</div>


      <!-- H2H Min Wins Filters -->
      <div class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <label for="minAwayH2HWins" class="whitespace-nowrap">🟥 Min Away H2H Wins</label>
        <input type="number" id="minAwayH2HWins" v-model.number="filters.minAwayH2HWins" min="0" max="20"
          class="w-16 rounded-md border border-gray-300 dark:border-gray-600 px-2 py-1 text-sm text-gray-800 dark:text-white bg-white dark:bg-gray-800" />
      </div>

      <div class="flex items-center gap-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        <label for="minHomeH2HWins" class="whitespace-nowrap">🟦 Min Home H2H Wins</label>
        <input type="number" id="minHomeH2HWins" v-model.number="filters.minHomeH2HWins" min="0" max="20"
          class="w-16 rounded-md border border-gray-300 dark:border-gray-600 px-2 py-1 text-sm text-gray-800 dark:text-white bg-white dark:bg-gray-800" />
      </div>
    </div>
  </div>
</transition>

</div>
<div v-if="totalPages > 1" class="flex justify-center items-center space-x-4 mt-6">
  <button @click="goToPrevPage" :disabled="currentPage === 1"
    class="px-3 py-1 text-sm border rounded disabled:opacity-50">Prev</button>

  <span class="text-sm text-gray-600 dark:text-gray-300">
    Page {{ currentPage }} of {{ totalPages }}
  </span>

  <button @click="goToNextPage" :disabled="currentPage === totalPages"
    class="px-3 py-1 text-sm border rounded disabled:opacity-50">Next</button>
</div>


<!-- Best Bets Section -->
<section
  v-if="showBestBets && Object.values(bestBets).some(b => b)"
  class="my-12 px-4 sm:px-0"
>  <div class="bg-white shadow-lg rounded-2xl p-6 ring-1 ring-gray-100">
    <h2 class="text-2xl font-bold text-indigo-700 mb-6">🔥 Top AI-Picked Bets</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- GG -->
      <div v-if="bestBets.bestGG" class="p-4 rounded-xl border border-indigo-200 bg-indigo-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-indigo-700 mb-1">Both Teams to Score (GG)</h3>
          <p class="text-sm mb-2">{{ bestBets.bestGG.home_team }} vs {{ bestBets.bestGG.away_team }}</p>
        </div>
        <a :href="bestBets.bestGG.match_link" target="_blank" class="text-xs text-indigo-600 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- Over 2.5 Goals -->
      <div v-if="bestBets.bestOver25" class="p-4 rounded-xl border border-yellow-200 bg-yellow-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-yellow-700 mb-1">Over 2.5 Goals</h3>
          <p class="text-sm mb-2">{{ bestBets.bestOver25.home_team }} vs {{ bestBets.bestOver25.away_team }}</p>
        </div>
        <a :href="bestBets.bestOver25.match_link" target="_blank" class="text-xs text-yellow-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- Best 1 -->
      <div v-if="bestBets.best1" class="p-4 rounded-xl border border-blue-200 bg-blue-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-blue-700 mb-1">Home Win (1)</h3>
          <p class="text-sm mb-2">{{ bestBets.best1.home_team }} vs {{ bestBets.best1.away_team }}</p>
        </div>
        <a :href="bestBets.best1.match_link" target="_blank" class="text-xs text-blue-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- Best 2 -->
      <div v-if="bestBets.best2" class="p-4 rounded-xl border border-red-200 bg-red-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-red-700 mb-1">Away Win (2)</h3>
          <p class="text-sm mb-2">{{ bestBets.best2.home_team }} vs {{ bestBets.best2.away_team }}</p>
        </div>
        <a :href="bestBets.best2.match_link" target="_blank" class="text-xs text-red-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- 1 + Over 2.5 -->
      <div v-if="bestBets.best1Over25" class="p-4 rounded-xl border border-cyan-200 bg-cyan-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-cyan-700 mb-1">Home Win + Over 2.5</h3>
          <p class="text-sm mb-2">{{ bestBets.best1Over25.home_team }} vs {{ bestBets.best1Over25.away_team }}</p>
        </div>
        <a :href="bestBets.best1Over25.match_link" target="_blank" class="text-xs text-cyan-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- 2 + Over 2.5 -->
      <div v-if="bestBets.best2Over25" class="p-4 rounded-xl border border-pink-200 bg-pink-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-pink-700 mb-1">Away Win + Over 2.5</h3>
          <p class="text-sm mb-2">{{ bestBets.best2Over25.home_team }} vs {{ bestBets.best2Over25.away_team }}</p>
        </div>
        <a :href="bestBets.best2Over25.match_link" target="_blank" class="text-xs text-pink-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- Top Home Scorer -->
      <div v-if="bestBets.bestHomeGoalTeam" class="p-4 rounded-xl border border-green-200 bg-green-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-green-700 mb-1">Best Scoring Home Team</h3>
          <p class="text-sm mb-2">{{ bestBets.bestHomeGoalTeam.home_team }} vs {{ bestBets.bestHomeGoalTeam.away_team }}</p>
        </div>
        <a :href="bestBets.bestHomeGoalTeam.match_link" target="_blank" class="text-xs text-green-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

      <!-- Top Away Scorer -->
      <div v-if="bestBets.bestAwayGoalTeam" class="p-4 rounded-xl border border-purple-200 bg-purple-50 shadow flex flex-col justify-between">
        <div>
          <h3 class="text-sm font-semibold text-purple-700 mb-1">Best Scoring Away Team</h3>
          <p class="text-sm mb-2">{{ bestBets.bestAwayGoalTeam.home_team }} vs {{ bestBets.bestAwayGoalTeam.away_team }}</p>
        </div>
        <a :href="bestBets.bestAwayGoalTeam.match_link" target="_blank" class="text-xs text-purple-700 hover:underline font-semibold mt-auto">🔍 Deep Analysis</a>
      </div>

    </div>
  </div>
</section>



        <!-- Main Content -->
        <main class="">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
                <div class="flex items-center mb-4 md:mb-0">
                    <h2 class="text-xl font-bold">⚽ Today's Matches</h2>
                    <span
                        class="ml-2 px-3 py-1 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-xs font-semibold rounded-full shadow">
                        {{ filteredMatches.length }} Predictions
                    </span>
                </div>
                <div class="flex items-center text-sm text-gray-500  :text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ today }}
                </div>
            </div>




          <!-- Ultra-Modern Match Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 sm:px-0">
    <div v-for="match in paginatedMatches"
    :key="match.id"
         class="bg-white dark:bg-gray-850 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group border border-gray-100 dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-800/50 relative">

        <!-- Glow Effect for Top Predictions -->
        <div v-if="getPrediction(match) === 'strong home win'"
             class="absolute inset-0 rounded-2xl pointer-events-none bg-blue-500/5 group-hover:bg-blue-500/10 transition-all duration-700"></div>
        <div v-if="getPrediction(match) === 'likely away win'"
             class="absolute inset-0 rounded-2xl pointer-events-none bg-red-500/5 group-hover:bg-red-500/10 transition-all duration-700"></div>

        <!-- Match Header with Dynamic Gradient -->
        <div class="relative p-6 pb-4 bg-gradient-to-r from-blue-50/80 to-indigo-50/80 dark:from-gray-800 dark:to-gray-800">
            <!-- Floating Time Badge -->
            <div class="absolute top-4 right-4 backdrop-blur-sm bg-white/90 dark:bg-gray-700/90 px-3 py-1.5 rounded-full shadow-xs flex items-center space-x-2">
                <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-300 flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-1.5 animate-pulse"></span>
                    {{ match.match_time }}
                </span>
                <span class="text-[10px] text-gray-500 dark:text-gray-400">
                    {{ match.match_date }}
                </span>
            </div>

            <!-- League Tag -->
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-white dark:bg-gray-700 shadow-xs mb-3">
                <span class="text-xs font-bold text-indigo-500 dark:text-indigo-400 uppercase tracking-wider">
                    {{ match.league }}
                </span>
            </div>

            <!-- Team Names with Hover Effects -->
            <h3 class="text-2xl font-extrabold text-center">
                <span class="text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
                    {{ match.home_team }}
                </span>
                <span class="mx-2 text-gray-400 dark:text-gray-500 font-normal">vs</span>
                <span class="text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors duration-300">
                    {{ match.away_team }}
                </span>
            </h3>
        </div>

        <!-- Odds Section with 3D Card Effect -->
        <div class="px-6 py-4 bg-gray-50/50 dark:bg-gray-800/30 backdrop-blur-sm">
            <div class="grid grid-cols-3 gap-3">
                <!-- Home Odds Card -->
                <div @click="selectPrediction(match, 'home')"
                    :class="[
                        'relative rounded-xl p-3 text-center border-2 transition-all duration-300 cursor-pointer transform hover:-translate-y-1 hover:shadow-lg',
                        'bg-gradient-to-b from-blue-50/80 to-white dark:from-blue-900/20 dark:to-gray-800',
                        'border-blue-200 dark:border-blue-800/30 hover:border-blue-300 dark:hover:border-blue-700',
                        getPrediction(match) === 'strong home win' ? 'ring-2 ring-blue-500 dark:ring-blue-400 z-10 scale-[1.03]' : ''
                    ]">
                    <div class="text-xs font-bold text-blue-600 dark:text-blue-300 mb-1">Home</div>
                    <div class="text-xl font-black text-gray-900 dark:text-white">@{{ match.odds_home }}</div>
                    <div v-if="getPrediction(match) === 'strong home win'"
                         class="absolute -top-2 -right-2 bg-blue-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full animate-bounce">
                        BEST BET
                    </div>
                </div>

                <!-- Draw Odds Card -->
                <div @click="selectPrediction(match, 'draw')"
                    :class="[
                        'relative rounded-xl p-3 text-center border-2 transition-all duration-300 cursor-pointer transform hover:-translate-y-1 hover:shadow-lg',
                        'bg-gradient-to-b from-gray-50/80 to-white dark:from-gray-700/20 dark:to-gray-800',
                        'border-gray-200 dark:border-gray-700 hover:border-gray-300 dark:hover:border-gray-600',
                        getPrediction(match) === 'potential draw' ? 'ring-2 ring-gray-500 dark:ring-gray-300 z-10 scale-[1.03]' : ''
                    ]">
                    <div class="text-xs font-bold text-gray-600 dark:text-gray-300 mb-1">Draw</div>
                    <div class="text-xl font-black text-gray-900 dark:text-white">@{{ match.odds_draw }}</div>
                </div>

                <!-- Away Odds Card -->
                <div @click="selectPrediction(match, 'away')"
                    :class="[
                        'relative rounded-xl p-3 text-center border-2 transition-all duration-300 cursor-pointer transform hover:-translate-y-1 hover:shadow-lg',
                        'bg-gradient-to-b from-red-50/80 to-white dark:from-red-900/20 dark:to-gray-800',
                        'border-red-200 dark:border-red-800/30 hover:border-red-300 dark:hover:border-red-700',
                        getPrediction(match) === 'likely away win' ? 'ring-2 ring-red-500 dark:ring-red-400 z-10 scale-[1.03]' : ''
                    ]">
                    <div class="text-xs font-bold text-red-600 dark:text-red-300 mb-1">Away</div>
                    <div class="text-xl font-black text-gray-900 dark:text-white">@{{ match.odds_away }}</div>
                    <div v-if="getPrediction(match) === 'likely away win'"
                         class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full animate-bounce">
                        HOT PICK
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Prediction Banner -->
        <div v-if="match.details" class="px-6 py-3 border-t border-gray-100 dark:border-gray-700">
            <div class="flex items-center justify-between bg-indigo-50/70 dark:bg-indigo-900/30 p-3 rounded-lg backdrop-blur-sm border border-indigo-100 dark:border-indigo-800/50">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center mr-3">
                        <span class="text-white text-sm">AI</span>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Prediction Confidence</p>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-1.5 mt-1">
                            <div class="bg-gradient-to-r from-indigo-400 to-purple-500 h-1.5 rounded-full"
                                 :style="{ width: getConfidence(match) + '%' }"></div>
                        </div>
                    </div>
                </div>
                <span class="font-bold text-indigo-600 dark:text-indigo-400 text-sm bg-white dark:bg-gray-800 px-2 py-1 rounded">
                    {{ getPrediction(match) }}
                </span>
            </div>
        </div>

        <!-- Team Comparison Section -->
        <div v-if="match.details" class="p-6 pt-4">
            <!-- Section Header -->
            <div class="flex items-center mb-4">
                <div class="w-8 h-8 rounded-md bg-gradient-to-r from-indigo-500 to-blue-500 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-gray-800 dark:text-gray-200 uppercase tracking-wider">Team Analytics</h3>
            </div>

            <!-- Comparison Grid -->
            <div class="space-y-6">
                <!-- Home Team -->
                <div class="relative">
                    <div class="absolute top-3 left-3 w-3 h-3 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 animate-pulse"></div>
                    <div class="pl-8">
                        <!-- Team Header -->
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="font-bold text-gray-900 dark:text-gray-100 flex items-center">
                                <span class="w-6 h-6 bg-blue-100 dark:bg-blue-900/50 rounded-full flex items-center justify-center mr-2">
                                    <span class="text-blue-600 dark:text-blue-300 text-xs font-bold">H</span>
                                </span>
                                {{ match.home_team }}
                            </h4>
                            <span class="text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-2.5 py-1 rounded-full">
                                Rank #{{ match.details.home_rank }}
                            </span>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-4 gap-3 text-xs mb-3">
                            <div class="text-center bg-gray-50 dark:bg-gray-800/50 p-2 rounded-lg">
                                <div class="font-bold">{{ match.details.home_mp }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Matches</div>
                            </div>
                            <div class="text-center bg-green-50/70 dark:bg-green-900/20 p-2 rounded-lg">
                                <div class="font-bold text-green-600 dark:text-green-400">{{ match.details.home_w }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Wins</div>
                            </div>
                            <div class="text-center bg-gray-50 dark:bg-gray-800/50 p-2 rounded-lg">
                                <div class="font-bold">{{ match.details.home_d }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Draws</div>
                            </div>
                            <div class="text-center bg-indigo-50/70 dark:bg-indigo-900/20 p-2 rounded-lg">
                                <div class="font-bold text-indigo-600 dark:text-indigo-400">{{ match.details.home_pts }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Points</div>
                            </div>
                        </div>

                        <!-- Enhanced Stats -->
                        <div class="grid grid-cols-3 gap-2 bg-gray-50 dark:bg-gray-800/30 p-2 rounded-lg border border-gray-100 dark:border-gray-700">
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">{{ match.details.home_g }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Goals</div>
                            </div>
                            <div class="text-center border-x border-gray-200 dark:border-gray-700">
                                <div class="text-lg font-bold" :class="{
                                    'text-green-500 dark:text-green-400': match.details.home_gd > 0,
                                    'text-red-500 dark:text-red-400': match.details.home_gd < 0,
                                    'text-gray-500 dark:text-gray-400': match.details.home_gd === 0
                                }">
                                    {{ match.details.home_gd > 0 ? '+' : '' }}{{ match.details.home_gd }}
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">GD</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-indigo-600 dark:text-indigo-400">{{ match.details.home_pts }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Pts</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Away Team -->
                <div class="relative">
                    <div class="absolute top-3 left-3 w-3 h-3 rounded-full bg-gradient-to-r from-red-400 to-red-600 animate-pulse"></div>
                    <div class="pl-8">
                        <!-- Team Header -->
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="font-bold text-gray-900 dark:text-gray-100 flex items-center">
                                <span class="w-6 h-6 bg-red-100 dark:bg-red-900/50 rounded-full flex items-center justify-center mr-2">
                                    <span class="text-red-600 dark:text-red-300 text-xs font-bold">A</span>
                                </span>
                                {{ match.away_team }}
                            </h4>
                            <span class="text-xs font-medium bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-300 px-2.5 py-1 rounded-full">
                                Rank #{{ match.details.away_rank }}
                            </span>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-4 gap-3 text-xs mb-3">
                            <div class="text-center bg-gray-50 dark:bg-gray-800/50 p-2 rounded-lg">
                                <div class="font-bold">{{ match.details.away_mp }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Matches</div>
                            </div>
                            <div class="text-center bg-green-50/70 dark:bg-green-900/20 p-2 rounded-lg">
                                <div class="font-bold text-green-600 dark:text-green-400">{{ match.details.away_w }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Wins</div>
                            </div>
                            <div class="text-center bg-gray-50 dark:bg-gray-800/50 p-2 rounded-lg">
                                <div class="font-bold">{{ match.details.away_d }}</div>
                                <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Draws</div>
                            </div>
                            <div class="text-center bg-indigo-50/70 dark:bg-indigo-900/20 p-2 rounded-lg">
                                <div class="font-bold text-indigo-600 dark:text-indigo-400">{{ match.details.away_pts }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Points</div>
                            </div>
                        </div>

                        <!-- Enhanced Stats -->
                        <div class="grid grid-cols-3 gap-2 bg-gray-50 dark:bg-gray-800/30 p-2 rounded-lg border border-gray-100 dark:border-gray-700">
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">{{ match.details.away_g }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Goals</div>
                            </div>
                            <div class="text-center border-x border-gray-200 dark:border-gray-700">
                                <div class="text-lg font-bold" :class="{
                                    'text-green-500 dark:text-green-400': match.details.away_gd > 0,
                                    'text-red-500 dark:text-red-400': match.details.away_gd < 0,
                                    'text-gray-500 dark:text-gray-400': match.details.away_gd === 0
                                }">
                                    {{ match.details.away_gd > 0 ? '+' : '' }}{{ match.details.away_gd }}
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">GD</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-indigo-600 dark:text-indigo-400">{{ match.details.away_pts }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Pts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- H2H History -->
        <div v-if="match.details && match.details.h2h_home_wins !== null"
             class="px-6 py-4 bg-gray-50/50 dark:bg-gray-800/30 backdrop-blur-sm border-t border-gray-100 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-md bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-bold text-gray-800 dark:text-gray-200 uppercase tracking-wider">Head-to-Head</h3>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-center">
                        <div class="text-xs text-gray-500 dark:text-gray-400">Home Wins</div>
                        <div class="font-bold text-blue-600 dark:text-blue-400">{{ match.details.h2h_home_wins }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xs text-gray-500 dark:text-gray-400">Draws</div>
                        <div class="font-bold">{{ match.details.h2h_draws }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xs text-gray-500 dark:text-gray-400">Away Wins</div>
                        <div class="font-bold text-red-600 dark:text-red-400">{{ match.details.h2h_away_wins }}</div>
                    </div>
                </div>
            </div>

            <!-- View Analysis Button -->
            <a :href="match.match_link" target="_blank" rel="noopener"
               class="w-full flex items-center justify-center py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-indigo-900/30 transition-colors group/button">
                <span class="group-hover/button:translate-x-1 transition-transform duration-300">Deep Analysis</span>
                <svg class="w-4 h-4 ml-2 group-hover/button:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 3h7m0 0v7m0-7L10 14"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
            <!-- No Results Message -->
            <div v-if="filteredMatches.length === 0"
                class="bg-white  :bg-gray-800 p-8 rounded-xl text-center shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-lg font-semibold text-gray-700  :text-gray-300 mb-2">No matches found</h3>
                <p class="text-gray-500  :text-gray-400">Try adjusting your filters to see more predictions</p>
                <button @click="resetFilters"
                    class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700 transition shadow-sm">
                    Reset All Filters
                </button>
            </div>
        </main>

<!-- Pagination Controls -->
<div v-if="totalPages > 1" class="flex justify-center items-center space-x-2 mt-8">
  <button
    @click="() => { currentPage--; scrollToTop(); }"
    :disabled="currentPage === 1"
    class="px-3 py-1.5 rounded-md text-sm font-medium border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed">
    Prev
  </button>

  <span class="text-sm text-gray-600 dark:text-gray-300">
    Page {{ currentPage }} of {{ totalPages }}
  </span>

  <button
    @click="() => { currentPage++; scrollToTop(); }"
    :disabled="currentPage === totalPages"
    class="px-3 py-1.5 rounded-md text-sm font-medium border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed">
    Next
  </button>
</div>


        <!-- Footer -->
        <footer class="bg-blue-900 text-white p-6 mt-10">
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="font-bold text-lg">Dima Rab7</h3>
                    <p class="text-blue-200 text-sm">Expert Football Predictions</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-blue-200 transition">Terms</a>
                    <a href="#" class="text-white hover:text-blue-200 transition">Privacy</a>
                    <a href="#" class="text-white hover:text-blue-200 transition">Contact</a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';
const currentPage = ref(1);
const matchesPerPage = 50; // You can adjust this number as needed
const totalPages = computed(() => {
  return Math.ceil(filteredMatches.value.length / matchesPerPage);
});

const paginatedMatches = computed(() => {
  const start = (currentPage.value - 1) * matchesPerPage;
  return filteredMatches.value.slice(start, start + matchesPerPage);
});
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function goToNextPage() {
  if (currentPage.value < totalPages.value) {
    currentPage.value++;
    scrollToTop();
  }
}

function goToPrevPage() {
  if (currentPage.value > 1) {
    currentPage.value--;
    scrollToTop();
  }
}


const props = defineProps({
  matches: {
    type: Array,
    default: () => [],
  },
});

const todayLabel = new Date().toLocaleDateString('en-US', {
  weekday: 'long',
  month: 'short',
  day: 'numeric',
});

// Filters
const showAdvancedFilters = ref(false);
const filters = ref({
  league: '',
  predictionType: '',
  timeOfDay: 'all',
  minOdds: 0,     // default minimum value
  maxOdds: 50,    // default maximum value
  rankingType: 'all',
  teamSearch: '',
  over25: false,
  gg: false,
  matchDate: 'today',  // ✅ Set default here
  startHour: 0,
  endHour: 23,
  strongWinOdds: false,  // ✅ Add this
  hasComparison: false,
  bigRankGap: false, // 👈 Add this line
  winDiffOver10: false, // 👈 Add this
  strongGG: false,
  winDiffOver5: false,
  showHotPicks: false,
  bigGDDiff: false,
  minAwayH2HWins: 0,
minHomeH2HWins: 0,


});

// Utilities
function setDateFilter(value) {
  filters.value.matchDate = value;
}

function setTimeFilter(time) {
  filters.value.timeOfDay = time;
}

function setRankingFilter(type) {
  filters.value.rankingType = type;
}

function resetFilters() {
  filters.value = {
    league: '',
    predictionType: '',
    minOdds: 0,
    maxOdds: 50,
    rankingType: 'all',
    teamSearch: '',
    over25: false,
    gg: false,
    matchDate: '',
    startHour: 0,
    endHour: 23,
    strongWinOdds: false,
    hasComparison: false,
    bigRankGap: false, // 👈 Add this line
    winDiffOver10: false, // 👈 Add here too
    strongGG: false,
    winDiffOver5: false,
    showHotPicks: false,
    bigGDDiff: false,
    minAwayH2HWins: 0,
minHomeH2HWins: 0,


  };
}


function getMatchDate(dateStr) {
  const [year, month, day] = dateStr.split('-');
  return new Date(year, month - 1, day);
}

function isMatchOnSelectedDate(matchDateStr) {
  const matchDate = new Date(matchDateStr);
  const today = new Date();
  const offsetDays = { yesterday: -1, today: 0, tomorrow: 1 };
  const targetDate = new Date();
  targetDate.setDate(today.getDate() + offsetDays[filters.value.matchDate]);
  return matchDate.toDateString() === targetDate.toDateString();
}

function isLikelyOver25(match) {
  if (!match.details) return false;
  const g1 = parseInt(match.details.home_g);
  const g2 = parseInt(match.details.away_g);
  const mp1 = parseInt(match.details.home_mp);
  const mp2 = parseInt(match.details.away_mp);
  if (!g1 || !g2 || !mp1 || !mp2) return false;
  const avgCombined = g1 / mp1 + g2 / mp2;
  const homeGD = parseInt(match.details.home_gd);
  const awayGD = parseInt(match.details.away_gd);
  return avgCombined >= 2.2 && (Math.abs(homeGD) > 5 || Math.abs(awayGD) > 5);
}

function getOver25Prob(match) {
  if (!isLikelyOver25(match)) return 0;
  const avg = match.details.home_g / match.details.home_mp + match.details.away_g / match.details.away_mp;
  return Math.min(1, avg / 3.5).toFixed(2);
}

function isGuaranteedGG(match) {
  if (!match.details) return false;
  const homeAvg = match.details.home_g / match.details.home_mp;
  const awayAvg = match.details.away_g / match.details.away_mp;
  const homeLeaks = match.details.home_gd < -5;
  const awayLeaks = match.details.away_gd < -5;
  return homeAvg >= 1.2 && awayAvg >= 1.2 && homeLeaks && awayLeaks;
}

const availableLeagues = computed(() => {
  const set = new Set();
  props.matches.forEach(m => m.league && set.add(m.league));
  return Array.from(set).sort();
});

const filteredMatches = computed(() => {
  return props.matches.filter(match => {
    // League filter
    if (filters.value.league && match.league !== filters.value.league) return false;

    // Prediction type
    if (filters.value.predictionType && getPrediction(match) !== filters.value.predictionType) return false;

    // Match date (today/yesterday/tomorrow)
    if (filters.value.matchDate && match.match_date && !isMatchOnSelectedDate(match.match_date)) return false;

    // 💣 Big Rank Gap
if (filters.value.bigRankGap && match.details) {
  const homeRank = parseInt(match.details.home_rank);
  const awayRank = parseInt(match.details.away_rank);
  const rankDiff = Math.abs(homeRank - awayRank);

  if (isNaN(rankDiff) || rankDiff < 10) {
    return false;
  }
}
if (filters.value.minAwayH2HWins > 0 && match.details) {
  const awayWins = parseInt(match.details.h2h_away_wins || 0);
  if (awayWins < filters.value.minAwayH2HWins) return false;
}

if (filters.value.minHomeH2HWins > 0 && match.details) {
  const homeWins = parseInt(match.details.h2h_home_wins || 0);
  if (homeWins < filters.value.minHomeH2HWins) return false;
}

if (filters.value.minGDDiff > 0 && match.details) {
  const homeGD = parseInt(match.details.home_gd?.replace('+', '')) || 0;
  const awayGD = parseInt(match.details.away_gd?.replace('+', '')) || 0;
  const gdDiff = Math.abs(homeGD - awayGD);

  if (gdDiff < filters.value.minGDDiff) return false;
}


if (filters.value.showHotPicks) {
  const prediction = getPrediction(match);
  if (prediction !== 'likely away win' && prediction !== 'strong home win') {
    return false;
  }
}

// Win difference > 10
if (filters.value.winDiffOver10 && match.details) {
  const homeWins = parseInt(match.details.home_w);
  const awayWins = parseInt(match.details.away_w);
  if (isNaN(homeWins) || isNaN(awayWins)) return false;

  const winDiff = Math.abs(homeWins - awayWins);
  if (winDiff <= 10) return false;
}

if (filters.value.winDiffOver5 && match.details) {
  const homeWins = parseInt(match.details.home_w);
  const awayWins = parseInt(match.details.away_w);
  if (isNaN(homeWins) || isNaN(awayWins)) return false;

  const winDiff = Math.abs(homeWins - awayWins);
  if (winDiff <= 5) return false;
}


if (filters.value.strongGG && match.details) {
  const [hGF, hGA] = match.details.home_g?.split(':').map(Number) || [];
  const [aGF, aGA] = match.details.away_g?.split(':').map(Number) || [];

  const validGG = hGF > 50 && hGA > 50 && aGF > 50 && aGA > 50;
  if (!validGG) return false;
}

    // Time range filter (hour only)
    if (filters.value.startHour !== null && filters.value.endHour !== null) {
      const hour = parseInt(match.match_time.split(':')[0]);
      const { startHour, endHour } = filters.value;
      if (startHour <= endHour) {
        if (hour < startHour || hour > endHour) return false;
      } else {
        // e.g. 22 → 2
        if (!(hour >= startHour || hour <= endHour)) return false;
      }
    }
    if (filters.value.strongWinOdds) {
  const prediction = getPrediction(match);
  const oddsHome = parseFloat(match.odds_home);
  const oddsAway = parseFloat(match.odds_away);

  const isStrongHome = prediction === 'strong home win' && oddsHome > 2;
  const isStrongAway = prediction === 'likely away win' && oddsAway > 2;

  if (!isStrongHome && !isStrongAway) return false;
}

    // Odds range filter (at least one in range)
    const homeOdds = parseFloat(match.odds_home);
    const drawOdds = parseFloat(match.odds_draw);
    const awayOdds = parseFloat(match.odds_away);
    const oddsInRange = odds =>
      odds >= filters.value.minOdds && odds <= filters.value.maxOdds;
    if (
      !oddsInRange(homeOdds) &&
      !oddsInRange(drawOdds) &&
      !oddsInRange(awayOdds)
    ) return false;

    // Ranking filter
    if (filters.value.rankingType !== 'all' && match.details) {
      const homeRank = parseInt(match.details.home_rank);
      const awayRank = parseInt(match.details.away_rank);
      if (filters.value.rankingType === 'topVsTop' && (homeRank > 10 || awayRank > 10)) return false;
      if (filters.value.rankingType === 'mismatch' && Math.abs(homeRank - awayRank) < 10) return false;
    }

    // Over 2.5 goals filter
    if (filters.value.over25) {
  if (!match.details) return false;

  const homeGoals = parseInt(match.details.home_g?.split(":")[0]) || 0;
  const awayGoals = parseInt(match.details.away_g?.split(":")[0]) || 0;

  if (!(homeGoals > 50 || awayGoals > 50 || (homeGoals + awayGoals) > 100)) {
    return false;
  }
}
 // With Team Comparison
 if (filters.value.hasComparison) {
  const d = match.details;
  if (
    !d ||
    d.home_rank == null ||
    d.away_rank == null ||
    d.home_mp == null ||
    d.away_mp == null ||
    d.home_pts == null ||
    d.away_pts == null
  ) {
    return false;
  }
}

    // GG filter (both teams score)
    if (filters.value.gg) {
  if (!match.details) return false;

  const homeGoals = parseInt(match.details.home_g?.split(":")[0]) || 0;
  const awayGoals = parseInt(match.details.away_g?.split(":")[0]) || 0;

  if (homeGoals < 50 || awayGoals < 50) return false;
}

    // Team name search
    if (filters.value.teamSearch) {
      const term = filters.value.teamSearch.toLowerCase();
      if (
        !match.home_team.toLowerCase().includes(term) &&
        !match.away_team.toLowerCase().includes(term)
      ) return false;
    }

    return true;
  });
});

function getPrediction(match) {
  if (!match.details) return 'closely contested match';

  const d = match.details;

  // Parse H2H
  const homeWins = d.h2h_home_wins || 0;
  const awayWins = d.h2h_away_wins || 0;
  const draws = d.h2h_draws || 0;
  const totalH2H = homeWins + awayWins + draws;

  // Team comparison
  const homeRank = parseInt(d.home_rank);
  const awayRank = parseInt(d.away_rank);
  const homePts = parseInt(d.home_pts);
  const awayPts = parseInt(d.away_pts);
  const homeGD = parseInt(d.home_gd.replace("+", "")) || 0;
  const awayGD = parseInt(d.away_gd.replace("+", "")) || 0;

  // Strong home win logic
  if (
    totalH2H >= 3 &&
    homeWins >= 2 &&
    homeWins > awayWins + 1 &&
    homeRank < awayRank &&
    homePts >= awayPts - 5 &&
    homeGD >= awayGD - 5
  ) {
    return 'strong home win';
  }

  // Likely away win logic
  if (
    totalH2H >= 3 &&
    awayWins >= 2 &&
    awayWins > homeWins + 1 &&
    awayRank < homeRank &&
    awayPts >= homePts - 5 &&
    awayGD >= homeGD - 5
  ) {
    return 'likely away win';
  }

  // Balanced H2H or draw tendency
  if (Math.abs(homeWins - awayWins) <= 1 && draws >= 1) {
    return 'potential draw';
  }

  // Fallback
  return 'closely contested match';
}

function getConfidence(match) {
  if (!match.details) return 'Low';

  const d = match.details;
  const total = d.h2h_home_wins + d.h2h_away_wins + d.h2h_draws;

  if (!total || total < 3) return 'Low';

  const top = Math.max(d.h2h_home_wins, d.h2h_away_wins);
  const ratio = top / total;

  const goalGap = Math.abs(parseInt(d.home_gd || 0) - parseInt(d.away_gd || 0));

  if (ratio >= 0.7 && goalGap >= 10) return 'High';
  if (ratio >= 0.5 || goalGap >= 5) return 'Medium';
  return 'Low';
}
const bestBets = computed(() => generateBestBets(filteredMatches.value));

function generateBestBets(matches) {
  const bets = {
    bestGG: null,
    bestOver25: null,
    best1: null,
    best2: null,
    best1Over25: null,
    best2Over25: null,
    bestHomeGoalTeam: null,
    bestAwayGoalTeam: null,
  };

  const filtered = matches.filter(m => m.details && m.odds_home && m.odds_away);

  for (const match of filtered) {
    const d = match.details;
    const homeGoals = parseInt(d.home_g?.split(":")[0]) || 0;
    const awayGoals = parseInt(d.away_g?.split(":")[0]) || 0;
    const totalGoals = homeGoals + awayGoals;
    const oddsHome = parseFloat(match.odds_home);
    const oddsAway = parseFloat(match.odds_away);

    // Best GG
    if (homeGoals >= 50 && awayGoals >= 50) {
       if (!bets.bestGG || totalGoals > (bets.bestGG.details.home_g + bets.bestGG.details.away_g)) {
         bets.bestGG = match;
       }
     }

     // Best Over 2.5
     if (homeGoals > 50 || awayGoals > 50 || totalGoals > 100) {
       if (!bets.bestOver25 || totalGoals > (parseInt(bets.bestOver25.details.home_g) + parseInt(bets.bestOver25.details.away_g))) {
         bets.bestOver25 = match;
       }
     }

     // Best 1 (home win)
     if (oddsHome > 1.4 && oddsHome < 2.5 && getPrediction(match) === 'strong home win') {
       if (!bets.best1 || oddsHome > parseFloat(bets.best1.odds_home)) {
         bets.best1 = match;
       }
     }

     // Best 2 (away win)
     if (oddsAway > 1.4 && oddsAway < 2.5 &&getPrediction(match) === 'likely away win') {
       if (!bets.best2 || oddsAway > parseFloat(bets.best2.odds_away)) {
         bets.best2 = match;
       }
     }

     // Best 1 + Over 2.5
     if (oddsHome > 1.4 && getPrediction(match) === 'strong home win' && (homeGoals > 70 || totalGoals > 100)) {
       if (!bets.best1Over25 || oddsHome > parseFloat(bets.best1Over25.odds_home)) {
         bets.best1Over25 = match;
       }
     }

     // Best 2 + Over 2.5
     if (oddsAway > 1.4 && getPrediction(match) === 'likely away win' && (awayGoals > 60 || totalGoals > 130)) {
       if (!bets.best2Over25 || oddsAway > parseFloat(bets.best2Over25.odds_away)) {
         bets.best2Over25 = match;
       }
     }

     // Best Home Team Scorer
     if (homeGoals > 60) {
       if (!bets.bestHomeGoalTeam || homeGoals > parseInt(bets.bestHomeGoalTeam.details.home_g)) {
         bets.bestHomeGoalTeam = match;
       }
     }

     // Best Away Team Scorer
     if (awayGoals > 60) {
       if (!bets.bestAwayGoalTeam || awayGoals > parseInt(bets.bestAwayGoalTeam.details.away_g)) {
         bets.bestAwayGoalTeam = match;
       }
     }
   }

  return bets;
}
const showBestBets = ref(false); // default is hidden

</script>

<style>
.text-xxs {
    font-size: 0.65rem;
}
</style>
