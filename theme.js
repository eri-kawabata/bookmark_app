const themeSwitcher = document.getElementById('theme-switcher');

// 現在のテーマを取得またはデフォルトをライトテーマに設定
let currentTheme = localStorage.getItem('theme') || 'light';
document.documentElement.setAttribute('data-theme', currentTheme);

// ボタンの表示を更新
themeSwitcher.textContent = getThemeLabel(currentTheme);

// テーマ切り替えイベント
themeSwitcher.addEventListener('click', () => {
    currentTheme = getNextTheme(currentTheme);
    document.documentElement.setAttribute('data-theme', currentTheme);
    localStorage.setItem('theme', currentTheme);
    themeSwitcher.textContent = getThemeLabel(currentTheme);
});

// テーマ名に対応するラベルを取得
function getThemeLabel(theme) {
    switch (theme) {
        case 'dark': return 'ライトテーマ';
        case 'solar': return 'ソーラーテーマ';
        default: return 'ダークテーマ';
    }
}

// 次のテーマを取得
function getNextTheme(current) {
    const themes = ['light', 'dark', 'solar'];
    const nextIndex = (themes.indexOf(current) + 1) % themes.length;
    return themes[nextIndex];
}
