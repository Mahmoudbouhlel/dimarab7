<template>
    <div
      v-if="open"
      class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm flex items-center justify-center p-4"
      role="dialog"
      aria-modal="true"
      aria-labelledby="premium-modal-title"
    >
      <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl w-full max-w-3xl max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white dark:bg-gray-900 p-6 pb-4 border-b border-gray-200 dark:border-gray-700">
          <div class="flex justify-between items-center">
            <h2 id="premium-modal-title" class="text-xl font-bold text-indigo-700 dark:text-indigo-400">
              🔥 Premium Tips of the Day
            </h2>
            <button
              @click="close"
              class="text-gray-400 hover:text-red-500 text-2xl transition-colors"
              aria-label="Close modal"
            >
              &times;
            </button>
          </div>
        </div>

        <div class="p-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-800 dark:text-gray-200">
            <template v-if="bets.bestGG">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🔥 GG Match:</span>
                {{ bets.bestGG.home_team }} vs {{ bets.bestGG.away_team }}
              </div>
            </template>

            <template v-if="bets.bestOver25">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">⚽ Over 2.5:</span>
                {{ bets.bestOver25.home_team }} vs {{ bets.bestOver25.away_team }}
              </div>
            </template>

            <template v-if="bets.best1">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🏠 Best 1:</span>
                {{ bets.best1.home_team }} - Odds {{ bets.best1.odds_home }}
              </div>
            </template>

            <template v-if="bets.best2">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🛫 Best 2:</span>
                {{ bets.best2.away_team }} - Odds {{ bets.best2.odds_away }}
              </div>
            </template>

            <template v-if="bets.best1Over25">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🏠+⚽ 1 + Over 2.5:</span>
                {{ bets.best1Over25.home_team }}
              </div>
            </template>

            <template v-if="bets.best2Over25">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🛫+⚽ 2 + Over 2.5:</span>
                {{ bets.best2Over25.away_team }}
              </div>
            </template>

            <template v-if="bets.bestHomeGoalTeam">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🔥 Home Team Scorer:</span>
                {{ bets.bestHomeGoalTeam.home_team }} ({{ bets.bestHomeGoalTeam.details.home_g }})
              </div>
            </template>

            <template v-if="bets.bestAwayGoalTeam">
              <div class="p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">🔥 Away Team Scorer:</span>
                {{ bets.bestAwayGoalTeam.away_team }} ({{ bets.bestAwayGoalTeam.details.away_g }})
              </div>
            </template>
          </div>

          <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700 text-center">
            <button
              @click="close"
              class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition-colors"
            >
              Got it, thanks!
            </button>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  const props = defineProps({
    open: Boolean,
    bets: {
      type: Object,
      default: () => ({})
    }
  });

  const emit = defineEmits(['close']);

  const close = () => {
    emit('close');
  };

  // Close modal when pressing Escape key
  const onKeyDown = (e) => {
    if (e.key === 'Escape' && props.open) {
      close();
    }
  };

  onMounted(() => {
    window.addEventListener('keydown', onKeyDown);
  });

  onUnmounted(() => {
    window.removeEventListener('keydown', onKeyDown);
  });
  </script>
