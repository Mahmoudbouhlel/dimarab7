<template>
    <div
        class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
        <!-- Header -->
        <header
            class="bg-white/70 backdrop-blur-md shadow-md px-6 py-4 flex items-center justify-between sticky top-0 z-20">
            <div class="flex items-center space-x-3">
                <div class="relative w-10 h-10">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Tunisia.svg"
                        alt="Tunisia Logo" class="w-10 h-10 rounded-full object-cover border-2 border-red-500" />
                    <div
                        class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white flex items-center justify-center shadow">
                        <span class="text-white text-xs">⚽</span>
                    </div>
                </div>
                <div>
                    <h1
                        class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-blue-600">
                        Dima Rab7
                    </h1>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-300">Football Predictions</p>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <button
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition shadow-sm">
                    Premium Tips
                </button>
                <button
                    class="p-2 bg-gray-100 text-gray-600 rounded-full hover:bg-gray-200 transition dark:bg-gray-700 dark:hover:bg-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </header>
  <!-- Modern Advanced Filter Section -->
<div
  class="rounded-2xl bg-white dark:bg-gray-900 shadow-lg ring-1 ring-gray-200 dark:ring-gray-700 p-6 mb-10 transition-all duration-300">
  <!-- Header -->
  <div class="flex items-center justify-between mb-6">
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 4a1 1 0 011-1h16a1 1 0 011 1v3a1 1 0 01-.293.707L13 15.414V19a1 1 0 01-.293.707l-2 2A1 1 0 019 21v-5.586L3.293 7.707A1 1 0 013 7V4z" />
      </svg>
      <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Advanced Filters</h3>
    </div>
    <button @click="resetFilters"
      class="text-sm bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition font-medium">
      Reset All
    </button>
  </div>

  <!-- Basic Filters -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <!-- League Select -->
    <div>
      <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 block">League</label>
      <div class="relative">
        <select v-model="filters.league"
          class="w-full appearance-none bg-gray-50 dark:bg-gray-800 text-gray-800 dark:text-gray-100 border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-2 pr-10 focus:ring-2 focus:ring-indigo-500 text-sm">
          <option value="">All Leagues</option>
          <option v-for="league in availableLeagues" :key="league" :value="league">{{ league }}</option>
        </select>
        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Prediction Type -->
    <div>
      <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 block">Prediction Type</label>
      <div class="relative">
        <select v-model="filters.predictionType"
          class="w-full appearance-none bg-gray-50 dark:bg-gray-800 text-gray-800 dark:text-gray-100 border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-2 pr-10 focus:ring-2 focus:ring-indigo-500 text-sm">
          <option value="">All Predictions</option>
          <option value="strong home win">Strong Home Win</option>
          <option value="likely away win">Likely Away Win</option>
          <option value="potential draw">Potential Draw</option>
          <option value="closely contested match">Closely Contested</option>
        </select>
        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Match Date Filter -->
    <div>
      <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 block">Match Date</label>
      <div class="flex gap-2">
        <button @click="setDateFilter('yesterday')"
          :class="[filters.matchDate === 'yesterday' ? 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 border-indigo-300' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-600', 'flex-1 py-1.5 text-xs rounded-full border text-center transition font-medium']">
          Yesterday
        </button>
        <button @click="setDateFilter('today')"
          :class="[filters.matchDate === 'today' ? 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 border-indigo-300' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-600', 'flex-1 py-1.5 text-xs rounded-full border text-center transition font-medium']">
          Today
        </button>
        <button @click="setDateFilter('tomorrow')"
          :class="[filters.matchDate === 'tomorrow' ? 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 border-indigo-300' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-600', 'flex-1 py-1.5 text-xs rounded-full border text-center transition font-medium']">
          Tomorrow
        </button>
      </div>
    </div>
  </div>
  <!-- Match Time Range -->
<div class="md:col-span-2">
  <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Match Time Range (24h)</label>
  <div class="flex space-x-4 items-center">
    <div class="flex-1">
      <input type="range" min="0" max="23" v-model.number="filters.startHour"
        class="w-full accent-indigo-600 h-2 bg-gray-200 dark:bg-gray-700 rounded-lg cursor-pointer" />
      <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">Start Hour: {{ filters.startHour }}:00</p>
    </div>
    <div class="flex-1">
      <input type="range" min="0" max="23" v-model.number="filters.endHour"
        class="w-full accent-indigo-600 h-2 bg-gray-200 dark:bg-gray-700 rounded-lg cursor-pointer" />
      <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">End Hour: {{ filters.endHour }}:00</p>
    </div>
  </div>
</div>


  <!-- Advanced Toggle -->
  <div class="text-right">
    <button @click="showAdvancedFilters = !showAdvancedFilters"
      class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
      {{ showAdvancedFilters ? 'Hide' : 'Show' }} More Filters
    </button>
  </div>

  <!-- Expanded Filters -->
  <transition name="fade">
    <div v-if="showAdvancedFilters"
      class="mt-6 border-t pt-6 border-gray-200 dark:border-gray-700 grid grid-cols-1 md:grid-cols-3 gap-6">
 <!-- Odds Range Sliders -->
<div class="flex items-center space-x-4">
  <div class="flex-1">
    <input
      type="range"
      min="1"
      max="10"
      step="0.1"
      v-model.number="filters.minOdds"
      class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg cursor-pointer accent-indigo-600"
    />
    <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">Min Odds: {{ filters.minOdds }}</p>
  </div>
  <div class="flex-1">
    <input
      type="range"
      min="1"
      max="10"
      step="0.1"
      v-model.number="filters.maxOdds"
      class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg cursor-pointer accent-indigo-600"
    />
    <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">Max Odds: {{ filters.maxOdds }}</p>
  </div>
</div>


      <!-- Ranking Type -->
      <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Team Ranking</label>
        <div class="flex gap-2">
          <button v-for="type in ['all', 'topVsTop', 'mismatch']" :key="type" @click="setRankingFilter(type)"
            :class="[
              filters.rankingType === type
                ? 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 border-indigo-300'
                : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-600',
              'flex-1 py-1.5 text-xs rounded-full border text-center transition font-medium'
            ]">
            {{ type === 'all' ? 'All' : type === 'topVsTop' ? 'Top vs Top' : 'Mismatch' }}
          </button>
        </div>
      </div>

      <!-- Team Search -->
      <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Search Teams</label>
        <div class="relative">
          <input type="text" v-model="filters.teamSearch" placeholder="Enter team name..."
            class="w-full px-10 py-2 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl text-sm text-gray-800 dark:text-white" />
          <div class="absolute inset-y-0 left-3 flex items-center text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
            </svg>
          </div>
        </div>
      </div>

      <!-- New Filters: Over 2.5 & GG -->
      <div class="md:col-span-3 grid grid-cols-2 md:grid-cols-4 gap-4">
  <!-- Over 2.5 -->
  <label class="flex items-center space-x-2 text-sm font-medium text-gray-700 dark:text-gray-300">
    <input type="checkbox" v-model="filters.over25"
      class="form-checkbox rounded text-indigo-600 dark:bg-gray-800 dark:border-gray-600">
    <span>⚽ Over 2.5 (Each Team Scored 50+)</span>
  </label>

  <!-- GG -->
  <label class="flex items-center space-x-2 text-sm font-medium text-gray-700 dark:text-gray-300">
    <input type="checkbox" v-model="filters.gg"
      class="form-checkbox rounded text-indigo-600 dark:bg-gray-800 dark:border-gray-600">
    <span>🤝 GG (Both Teams Scored 50+)</span>
  </label>

  <!-- Strong Win + High Odds -->
  <label class="flex items-center space-x-2 text-sm font-medium text-gray-700 dark:text-gray-300">
    <input type="checkbox" v-model="filters.strongWinOdds"
      class="form-checkbox rounded text-indigo-600 dark:bg-gray-800 dark:border-gray-600">
    <span>💥 1 or 2 Win + Odds > 2</span>
  </label>
  <label class="flex items-center space-x-2 text-sm font-medium text-gray-700 dark:text-gray-300">
  <input type="checkbox" v-model="filters.hasComparison"
    class="form-checkbox rounded text-indigo-600 dark:bg-gray-800 dark:border-gray-600">
  <span>📊 With Team Comparison</span>
</label>


</div>



    </div>
  </transition>
</div>

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
                <div class="flex items-center text-sm text-gray-500 dark:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ today }}
                </div>
            </div>




            <!-- Modern Match Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div v-for="match in filteredMatches" :key="match.id"
                    class="bg-white dark:bg-gray-850 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-gray-700 hover:border-gray-200 dark:hover:border-gray-600">

                    <!-- Match Header -->
                    <div
                                    class="relative p-6 pb-4 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800">
                                    <div class="absolute top-4 right-4 bg-white dark:bg-gray-700 px-2 py-1 rounded-full shadow-xs text-right space-y-0.5">
            <div class="text-[11px] font-semibold text-indigo-600 dark:text-indigo-300">
                🕒 {{ match.match_time }}
            </div>
            <div class="text-[10px] text-gray-500 dark:text-gray-400">
                📅 {{ match.match_date }}
            </div>
            </div>


                        <div
                            class="text-xs font-medium text-indigo-500 dark:text-indigo-400 mb-1 uppercase tracking-wider">
                            {{ match.league }}
                        </div>

                        <h3 class="text-2xl font-extrabold text-center">
                            <span
                                class="text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                {{ match.home_team }}
                            </span>
                            <span class="mx-2 text-gray-400 dark:text-gray-500 font-normal">vs</span>
                            <span
                                class="text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">
                                {{ match.away_team }}
                            </span>
                        </h3>
                    </div>

                    <!-- Odds Section -->
                    <div class="px-6 py-4 bg-gray-50 dark:bg-gray-800/50">
                        <div class="grid grid-cols-3 gap-3">
  <!-- Home -->
  <div
    :class="[
      'rounded-xl p-3 text-center border transition-shadow relative',
      'bg-gradient-to-b from-blue-50 to-white dark:from-blue-900/20 dark:to-gray-800',
      'border-blue-100 dark:border-blue-800/50 hover:shadow-md',
      getPrediction(match) === 'strong home win' ? 'ring-2 ring-blue-500 dark:ring-blue-400' : ''
    ]">
    <div class="text-xs font-semibold text-blue-600 dark:text-blue-300 mb-1">Home</div>
    <div class="text-xl font-bold text-gray-900 dark:text-white">@{{ match.odds_home }}</div>
    <div v-if="getPrediction(match) === 'strong home win'" class="mt-1 text-[10px] text-blue-700 dark:text-blue-300 font-semibold">
      🏠 Prediction: 1 <br>
      🔥 Confidence: {{ getConfidence(match) }}
    </div>
  </div>

  <!-- Draw -->
  <div
    :class="[
      'rounded-xl p-3 text-center border transition-shadow relative',
      'bg-gradient-to-b from-gray-50 to-white dark:from-gray-700 dark:to-gray-800',
      'border-gray-200 dark:border-gray-700 hover:shadow-md',
      getPrediction(match) === 'potential draw' ? 'ring-2 ring-gray-500 dark:ring-gray-300' : ''
    ]">
    <div class="text-xs font-semibold text-gray-600 dark:text-gray-300 mb-1">Draw</div>
    <div class="text-xl font-bold text-gray-900 dark:text-white">@{{ match.odds_draw }}</div>
    <div v-if="getPrediction(match) === 'potential draw'" class="mt-1 text-[10px] text-gray-700 dark:text-gray-300 font-semibold">
      🤝 Prediction: X <br>
      Confidence: {{ getConfidence(match) }}
    </div>
  </div>

  <!-- Away -->
  <div
    :class="[
      'rounded-xl p-3 text-center border transition-shadow relative',
      'bg-gradient-to-b from-red-50 to-white dark:from-red-900/20 dark:to-gray-800',
      'border-red-100 dark:border-red-800/50 hover:shadow-md',
      getPrediction(match) === 'likely away win' ? 'ring-2 ring-red-500 dark:ring-red-400' : ''
    ]">
    <div class="text-xs font-semibold text-red-600 dark:text-red-300 mb-1">Away</div>
    <div class="text-xl font-bold text-gray-900 dark:text-white">@{{ match.odds_away }}</div>
    <div v-if="getPrediction(match) === 'likely away win'" class="mt-1 text-[10px] text-red-700 dark:text-red-300 font-semibold">
      🛫 Prediction: 2 <br>
      🔥 Confidence: {{ getConfidence(match) }}
    </div>
  </div>
</div>


                    </div>

                    <!-- Prediction Section -->
                    <div v-if="match.details" class="px-6 py-3 border-t border-gray-100 dark:border-gray-700">
                        <div
                            class="flex items-center justify-between bg-indigo-50/50 dark:bg-indigo-900/20 p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-3 h-3 rounded-full bg-indigo-500 mr-2"></div>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">AI Prediction</span>
                            </div>
                            <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ getPrediction(match)
                            }}</span>
                        </div>
                    </div>

                    <!-- Team Comparison -->
                    <div v-if="match.details" class="p-6 pt-4">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <h3 class="text-sm font-bold text-gray-800 dark:text-gray-200">TEAM COMPARISON</h3>
                        </div>

                        <div class="space-y-5">
                            <!-- Home Team -->
                            <div class="relative">
                                <div class="absolute top-3 left-3 w-2 h-2 rounded-full bg-blue-500"></div>
                                <div class="pl-6">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-bold text-gray-900 dark:text-gray-100">{{ match.home_team }}
                                        </h4>
                                        <span
                                            class="text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-2 py-1 rounded-full">
                                            #{{ match.details.home_rank }}
                                        </span>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2 text-xs mb-3">
                                        <div class="text-center">
                                            <div class="font-bold">{{ match.details.home_mp }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Matches</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold text-green-600 dark:text-green-400">{{
                                                match.details.home_w }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Wins</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold">{{ match.details.home_d }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Draws</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold text-indigo-600 dark:text-indigo-400">{{
                                                match.details.home_pts }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Points</div>
                                        </div>
                                    </div>

                                    <!-- Enhanced Stats Row -->
                                    <div class="grid grid-cols-3 gap-2 bg-gray-50 dark:bg-gray-800/30 p-2 rounded-lg">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900 dark:text-white">{{
                                                match.details.home_g }}</div>
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
                                            <div class="text-lg font-bold text-indigo-600 dark:text-indigo-400">{{
                                                match.details.home_pts }}</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Pts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Away Team -->
                            <div class="relative">
                                <div class="absolute top-3 left-3 w-2 h-2 rounded-full bg-red-500"></div>
                                <div class="pl-6">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-bold text-gray-900 dark:text-gray-100">{{ match.away_team }}
                                        </h4>
                                        <span
                                            class="text-xs font-medium bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-300 px-2 py-1 rounded-full">
                                            #{{ match.details.away_rank }}
                                        </span>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2 text-xs mb-3">
                                        <div class="text-center">
                                            <div class="font-bold">{{ match.details.away_mp }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Matches</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold text-green-600 dark:text-green-400">{{
                                                match.details.away_w }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Wins</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold">{{ match.details.away_d }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Draws</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold text-indigo-600 dark:text-indigo-400">{{
                                                match.details.away_pts }}</div>
                                            <div class="text-gray-500 dark:text-gray-400 text-[0.65rem]">Points</div>
                                        </div>
                                    </div>

                                    <!-- Enhanced Stats Row -->
                                    <div class="grid grid-cols-3 gap-2 bg-gray-50 dark:bg-gray-800/30 p-2 rounded-lg">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900 dark:text-white">{{
                                                match.details.away_g }}</div>
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
                                            <div class="text-lg font-bold text-indigo-600 dark:text-indigo-400">{{
                                                match.details.away_pts }}</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Pts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- H2H History -->
                    <div v-if="match.details && match.details.h2h_home_wins !== null"
                        class="px-6 py-4 bg-gray-50 dark:bg-gray-800/50 border-t border-gray-100 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <h3 class="text-sm font-bold text-gray-800 dark:text-gray-200">HEAD-TO-HEAD</h3>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Home</div>
                                    <div class="font-bold text-blue-600 dark:text-blue-400">{{
                                        match.details.h2h_home_wins }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Draws</div>
                                    <div class="font-bold">{{ match.details.h2h_draws }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Away</div>
                                    <div class="font-bold text-red-600 dark:text-red-400">{{ match.details.h2h_away_wins
                                    }}</div>
                                </div>
                            </div>
                        </div>

                        <a :href="match.match_link" target="_blank" rel="noopener"
                            class="w-full flex items-center justify-center py-2.5 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-indigo-900/30 transition-colors">
                            View Full Analysis
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 3h7m0 0v7m0-7L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- No Results Message -->
            <div v-if="filteredMatches.length === 0"
                class="bg-white dark:bg-gray-800 p-8 rounded-xl text-center shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">No matches found</h3>
                <p class="text-gray-500 dark:text-gray-400">Try adjusting your filters to see more predictions</p>
                <button @click="resetFilters"
                    class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700 transition shadow-sm">
                    Reset All Filters
                </button>
            </div>
        </main>

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
  const homeWins = match.details.h2h_home_wins;
  const awayWins = match.details.h2h_away_wins;
  const homeRank = parseInt(match.details.home_rank);
  const awayRank = parseInt(match.details.away_rank);
  if (homeWins > awayWins * 1.5 && homeRank < awayRank) return 'strong home win';
  if (awayWins > homeWins * 1.5 && awayRank < homeRank) return 'likely away win';
  if (Math.abs(homeWins - awayWins) <= 1) return 'potential draw';
  return 'closely contested match';
}

function getConfidence(match) {
  if (!match.details) return 'Low';
  const total = match.details.h2h_home_wins + match.details.h2h_away_wins + match.details.h2h_draws;
  if (!total) return 'Low';
  const top = Math.max(match.details.h2h_home_wins, match.details.h2h_away_wins);
  const ratio = top / total;
  if (ratio >= 0.65) return 'High';
  if (ratio >= 0.5) return 'Medium';
  return 'Low';
}
</script>

<style>
.text-xxs {
    font-size: 0.65rem;
}
</style>
