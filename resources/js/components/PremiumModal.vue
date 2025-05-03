<template>
    <transition name="fade">
      <div
        v-if="open"
        class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm flex items-center justify-center p-4"
        role="dialog"
        aria-modal="true"
        aria-labelledby="premium-modal-title"
      >
        <div
          class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl max-h-[90vh] overflow-y-auto animate-fadeIn"
        >
          <!-- Modal Header -->
          <div class="sticky top-0 bg-white p-6 pb-4 border-b border-gray-200">
            <div class="flex justify-between items-center">
              <h2
                id="premium-modal-title"
                class="text-2xl font-bold text-indigo-700 tracking-wide"
              >
                🔥 Premium Tips of the Day
              </h2>
              <button
                @click="close"
                class="text-gray-400 hover:text-red-500 text-2xl font-bold transition"
                aria-label="Close modal"
              >
                &times;
              </button>
            </div>
          </div>

          <!-- Modal Body -->
          <div class="p-6">
            <div v-if="hasPremiumBets" class="grid grid-cols-1 md:grid-cols-2 gap-4 text-[15px] text-gray-800">
              <template v-if="bets.bestGG">
                <MatchCard label="🔥 GG Match" :value="`${bets.bestGG.home_team} vs ${bets.bestGG.away_team}`" />
              </template>
              <template v-if="bets.bestOver25">
                <MatchCard label="⚽ Over 2.5" :value="`${bets.bestOver25.home_team} vs ${bets.bestOver25.away_team}`" />
              </template>
              <template v-if="bets.best1">
                <MatchCard label="🏠 Best 1" :value="`${bets.best1.home_team} - Odds ${bets.best1.odds_home}`" />
              </template>
              <template v-if="bets.best2">
                <MatchCard label="🛫 Best 2" :value="`${bets.best2.away_team} - Odds ${bets.best2.odds_away}`" />
              </template>
              <template v-if="bets.best1Over25">
                <MatchCard label="🏠+⚽ 1 + Over 2.5" :value="bets.best1Over25.home_team" />
              </template>
              <template v-if="bets.best2Over25">
                <MatchCard label="🛫+⚽ 2 + Over 2.5" :value="bets.best2Over25.away_team" />
              </template>
              <template v-if="bets.bestHomeGoalTeam">
                <MatchCard
                  label="🔥 Home Team Scorer"
                  :value="`${bets.bestHomeGoalTeam.home_team} (${bets.bestHomeGoalTeam.details.home_g})`"
                />
              </template>
              <template v-if="bets.bestAwayGoalTeam">
                <MatchCard
                  label="🔥 Away Team Scorer"
                  :value="`${bets.bestAwayGoalTeam.away_team} (${bets.bestAwayGoalTeam.details.away_g})`"
                />
              </template>
            </div>

            <div v-else class="text-center py-10">
              <div class="text-gray-500 mb-4">No premium tips available yet</div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>

            <!-- Footer -->
            <div class="mt-6 pt-4 border-t border-gray-200 text-center">
              <button
                @click="close"
                class="px-5 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow transition"
              >
                Got it, thanks!
              </button>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </template>

  <script setup lang="ts">

  import { computed } from 'vue'

  // Props
  const props = defineProps({
    open: Boolean,
    bets: {
      type: Object,
      default: () => ({})
    }
  })

  // Emit
  const emit = defineEmits(['close'])

  const close = () => {
    emit('close')
  }

  // Check if we have any premium bets to show
  const hasPremiumBets = computed(() => {
    return Object.values(props.bets).some(bet => bet !== null)
  })

  // Handle Escape key
  const onKeyDown = (e) => {
    if (e.key === 'Escape' && props.open) close()
  }

  onMounted(() => {
    window.addEventListener('keydown', onKeyDown)
  })

  onUnmounted(() => {
    window.removeEventListener('keydown', onKeyDown)
  })
  </script>

  <!-- MatchCard Component (Inline Template) -->
  <script>
  const MatchCard = {
    props: ['label', 'value'],
    template: `
      <div class="p-4 bg-gray-50 rounded-lg border border-indigo-100 shadow-sm">
        <span class="block font-semibold text-indigo-600 mb-1">{{ label }}</span>
        <span class="block text-gray-800">{{ value }}</span>
      </div>
    `
  }
  </script>

  <style>
  /* Optional fade-in animation */
  .fade-enter-active,
  .fade-leave-active {
    transition: opacity 0.3s ease;
  }
  .fade-enter-from,
  .fade-leave-to {
    opacity: 0;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fadeIn {
    animation: fadeIn 0.3s ease-out;
  }
  </style>
