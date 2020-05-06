// import variables from '@/styles/element-variables.scss'
import defaultSettings from '@/settings';

const {
  tagsView,
  fixedHeader,
  sidebarLogo,
  redirect,
  timeZone,
  showTrans,
  moreTransition,
  routerTransitionTo,
  routerTransitionFrom,
  superAdmin,
} = defaultSettings;

const state = {
  tagsView: tagsView,
  fixedHeader: fixedHeader,
  sidebarLogo: sidebarLogo,
  redirect: redirect,
  timeZone: timeZone,
  showTrans: showTrans,
  moreTransition,
  routerTransitionTo: routerTransitionTo,
  routerTransitionFrom: routerTransitionFrom,
  superAdmin: superAdmin,
};

const mutations = {
  CHANGE_SETTING: (state, { key, value }) => {
    if (Object.prototype.hasOwnProperty.call(state, key)) {
      state[key] = value;
    }
  },
};

const actions = {
  changeSetting({ commit }, data) {
    commit('CHANGE_SETTING', data);
  },
};

export default {
  namespaced: true,
  state,
  mutations,
  actions,
};
