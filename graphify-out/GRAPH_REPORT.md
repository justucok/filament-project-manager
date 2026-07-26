# Graph Report - .  (2026-07-26)

## Corpus Check
- cluster-only mode — file stats not available

## Summary
- 3499 nodes · 9844 edges · 165 communities (144 shown, 21 thin omitted)
- Extraction: 90% EXTRACTED · 10% INFERRED · 0% AMBIGUOUS · INFERRED: 1009 edges (avg confidence: 0.64)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `557ad100`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- rich-editor.js
- stat/chart.js
- markdown-editor.js
- components/chart.js
- o
- select.js
- echo.js
- deleteInDirection
- V
- getContext
- file-upload.js
- updateElements
- support.js
- _update
- get
- D
- updateElements
- te
- inRange
- Filament\Tables\Table
- notifications.js
- setDocument
- render
- insertString
- draw
- kr
- u
- configure
- _a
- C
- _update
- Y
- createNodes
- ce
- serializeSelectionToDataTransfer
- qe
- f
- Illuminate\Database\Eloquent\Model
- getDatasetMeta
- eh
- fa
- x
- notifyEditorElement
- _each
- getDatasetMeta
- St
- Filament\Resources\Pages\EditRecord
- Qt
- Soltem
- static
- getLocationRange
- kn
- devDependencies
- _notify
- Filament\Resources\Pages\ListRecords
- VerifyIsAdmin.php
- appendBlockForElement
- ra
- toString
- uu
- getDataset
- Filament\Resources\Pages\CreateRecord
- Km
- isHorizontal
- E
- parse
- SoltemRequest
- mutationIsSignificant
- Lo
- color-picker.js
- Uc
- format
- constructor
- draw
- composer.json
- scripts
- date-time-picker.js
- notifyPlugins
- fromObject
- _convertTicksToLabels
- formatDateTimeFromString
- Filament\Resources\Pages\ViewRecord
- SoltemInstallation
- fromDateTimes
- sc
- require-dev
- removeBlockAttribute
- Ii
- Dt
- setZone
- merge
- create
- config
- constructor
- kf
- ru
- fit
- plus
- require
- Be
- He
- oe
- pe
- te
- ci
- removeEventListener
- shiftTo
- _sync
- AppServiceProvider
- psr-4
- le
- post-autoload-dump
- post-create-project-cmd
- resolvedOptions
- ke
- autoload-dev
- keywords
- TestCase
- _updateHiddenIndices
- It
- toSQL
- Controller.php
- fromFormat
- fromFormatExplain
- getActiveElements
- jf
- jh
- ka
- reconfigure
- register
- resetCache

## God Nodes (most connected - your core abstractions)
1. `_update()` - 87 edges
2. `_update()` - 85 edges
3. `te()` - 76 edges
4. `u()` - 70 edges
5. `V()` - 64 edges
6. `vd()` - 52 edges
7. `draw()` - 51 edges
8. `n()` - 49 edges
9. `m()` - 48 edges
10. `ge()` - 46 edges

## Surprising Connections (you probably didn't know these)
- `te()` --indirect_call--> `Pr()`  [INFERRED]
  public/js/filament/forms/components/markdown-editor.js → public/js/filament/filament/echo.js
- `getType()` --indirect_call--> `_t()`  [INFERRED]
  public/js/filament/forms/components/file-upload.js → public/js/filament/forms/components/markdown-editor.js
- `getExtension()` --indirect_call--> `Ht()`  [INFERRED]
  public/js/filament/forms/components/file-upload.js → public/js/filament/forms/components/markdown-editor.js
- `getAllExtensions()` --indirect_call--> `lt()`  [INFERRED]
  public/js/filament/forms/components/file-upload.js → public/js/filament/support/support.js
- `_freeze()` --indirect_call--> `lt()`  [INFERRED]
  public/js/filament/forms/components/file-upload.js → public/js/filament/support/support.js

## Import Cycles
- None detected.

## Communities (165 total, 21 thin omitted)

### Community 0 - "rich-editor.js"
Cohesion: 0.02
Nodes (113): activateAttributeIfSupported(), appendStringToTextAtIndex(), attachmentDidChangeAttributes(), attachmentDidChangeUploadProgress(), attachmentIsManaged(), canRedo(), canSyncDocumentView(), canUndo() (+105 more)

### Community 1 - "stat/chart.js"
Cohesion: 0.02
Nodes (121): didClickDialogButton(), aa(), addControllers(), addPlugins(), addScales(), alpha(), an(), be() (+113 more)

### Community 2 - "markdown-editor.js"
Cohesion: 0.04
Nodes (152): Ie(), _a(), Ae(), af(), ai(), al(), An(), ao() (+144 more)

### Community 4 - "o"
Cohesion: 0.04
Nodes (114): addAttribute(), addAttributeAtRange(), addAttributesAtRange(), addHTMLAttribute(), appendText(), applyBlockAttributeAtRange(), breakFormattedBlock(), charAt() (+106 more)

### Community 5 - "select.js"
Cohesion: 0.05
Nodes (34): [g](), on(), a(), c(), ce, d(), de, e (+26 more)

### Community 6 - "echo.js"
Cohesion: 0.05
Nodes (56): C(), I(), J(), O(), U(), V(), X(), a() (+48 more)

### Community 7 - "deleteInDirection"
Cohesion: 0.04
Nodes (74): ArrowLeft(), ArrowRight(), backspace(), beforeinput(), canApplyToDocument(), canDecreaseBlockAttributeLevel(), compositionend(), compositionstart() (+66 more)

### Community 8 - "V"
Cohesion: 0.17
Nodes (68): N(), [x](), De(), define(), _getTestState(), gf(), at(), B() (+60 more)

### Community 9 - "getContext"
Cohesion: 0.05
Nodes (68): acquireContext(), buildTicks(), calculateCircumference(), calculateLabelRotation(), _calculatePadding(), _circumference(), _computeGridLineItems(), _computeLabelItems() (+60 more)

### Community 10 - "file-upload.js"
Cohesion: 0.06
Nodes (52): Bp(), c(), ca(), clickPercent(), constructor(), cp(), Do(), dp() (+44 more)

### Community 11 - "updateElements"
Cohesion: 0.06
Nodes (54): acquireContext(), applyStack(), ar(), aspectRatio(), ca(), _calculateBarIndexPixels(), _calculateBarValuePixels(), calculateCircumference() (+46 more)

### Community 12 - "support.js"
Cohesion: 0.06
Nodes (52): ai(), apply(), ar(), B(), co(), ds(), $e(), es() (+44 more)

### Community 13 - "_update"
Cohesion: 0.06
Nodes (55): _a(), addBox(), afterBuildTicks(), afterCalculateLabelRotation(), afterDataLimits(), afterFit(), afterSetDimensions(), afterUpdate() (+47 more)

### Community 14 - "get"
Cohesion: 0.05
Nodes (53): active(), _animateOptions(), As(), beforeUpdate(), bh(), bi(), _cachedScopes(), cancel() (+45 more)

### Community 15 - "D"
Cohesion: 0.06
Nodes (48): addEventListener(), buildOrUpdateScales(), cl(), cs(), Ct(), D(), data(), di() (+40 more)

### Community 16 - "updateElements"
Cohesion: 0.06
Nodes (55): ac(), Ai(), Ao(), applyStack(), ar(), as(), aspectRatio(), ca() (+47 more)

### Community 17 - "te"
Cohesion: 0.05
Nodes (10): Bi(), bn(), Id(), ji(), kd(), qd(), Ri(), te() (+2 more)

### Community 18 - "inRange"
Cohesion: 0.06
Nodes (47): At(), beforeDatasetDraw(), beforeDatasetsDraw(), beforeDraw(), cr(), cu(), dataset(), ee() (+39 more)

### Community 19 - "Filament\Tables\Table"
Cohesion: 0.08
Nodes (12): SoltemInstallationResource, SoltemRequestResource, DepartmentResource, PositionRelationManager, SoltemInstallationRelationManager, SoltemRequestRelationManager, SoltemResource, UserResource (+4 more)

### Community 20 - "notifications.js"
Cohesion: 0.06
Nodes (23): actions(), button(), constructor(), danger(), dispatch(), dispatchSelf(), dispatchTo(), duration() (+15 more)

### Community 21 - "setDocument"
Cohesion: 0.07
Nodes (44): attachmentManagerDidRequestRemovalOfAttachment(), breaksOnReturn(), canSetCurrentAttribute(), canSetCurrentBlockAttribute(), compositionControllerDidRequestRemovalOfAttachment(), decreaseBlockAttributeLevel(), formatRemove(), getCurrentAttributes() (+36 more)

### Community 22 - "render"
Cohesion: 0.08
Nodes (47): add(), applyKeyboardCommand(), attachmentEditorDidRequestRemovalOfAttachment(), canBeGrouped(), compositionDidLoadSnapshot(), createCaptionElement(), dialogIsVisible(), didClickActionButton() (+39 more)

### Community 23 - "insertString"
Cohesion: 0.08
Nodes (37): attachFiles(), compositionShouldAcceptFile(), createLinkHTML(), deleteByDrag(), drop(), elementDidMutate(), getCurrentTextAttributes(), getData() (+29 more)

### Community 24 - "draw"
Cohesion: 0.10
Nodes (38): adjustHitBoxes(), afterDraw(), bc(), Bl(), clear(), _computeLabelArea(), _computeTitleHeight(), _createItems() (+30 more)

### Community 25 - "kr"
Cohesion: 0.09
Nodes (24): afterAutoSkip(), ba(), bd(), buildLookupTable(), gd(), getDecimalForPixel(), getDecimalForValue(), getValueForPixel() (+16 more)

### Community 26 - "u"
Cohesion: 0.19
Nodes (38): Bi(), d(), da(), di(), f(), fn(), g(), Ge() (+30 more)

### Community 27 - "configure"
Cohesion: 0.08
Nodes (38): _a(), active(), add(), _animateOptions(), ba(), _cachedScopes(), configure(), _createAnimations() (+30 more)

### Community 28 - "_a"
Cohesion: 0.14
Nodes (37): _a(), aa(), ba(), Be(), br(), Ca(), ce(), Dn() (+29 more)

### Community 29 - "C"
Cohesion: 0.10
Nodes (35): C(), Co(), _computeAngle(), cr(), diff(), endOf(), Et(), format() (+27 more)

### Community 30 - "_update"
Cohesion: 0.09
Nodes (36): afterBuildTicks(), afterCalculateLabelRotation(), afterDataLimits(), afterFit(), afterSetDimensions(), afterTickToLabelConversion(), afterUpdate(), beforeBuildTicks() (+28 more)

### Community 31 - "Y"
Cohesion: 0.08
Nodes (33): afterAutoSkip(), Bi(), buildLookupTable(), determineDataLimits(), Fi(), getAllParsedValues(), getDataTimestamps(), getDecimalForValue() (+25 more)

### Community 32 - "createNodes"
Cohesion: 0.06
Nodes (41): attachmentForFile(), attributesForFile(), cacheViewForObject(), canSetCurrentTextAttribute(), createAttachmentNodes(), createChildView(), createContainerElement(), createDocumentFragmentForSync() (+33 more)

### Community 33 - "ce"
Cohesion: 0.12
Nodes (31): Ac(), bl(), Cc(), ce(), cl(), Dc(), df(), dl() (+23 more)

### Community 34 - "serializeSelectionToDataTransfer"
Cohesion: 0.18
Nodes (13): copy(), cut(), dragstart(), getSelectedAttachments(), getSelectedDocument(), inputControllerWillCutText(), isSerializable(), selectionContainsAttachments() (+5 more)

### Community 35 - "qe"
Cohesion: 0.14
Nodes (29): xt(), we(), Ae(), at(), Cn(), de(), dt(), En() (+21 more)

### Community 36 - "f"
Cohesion: 0.15
Nodes (27): ad(), cd(), Ct(), dr(), f(), ir(), it(), Jl() (+19 more)

### Community 37 - "Illuminate\Database\Eloquent\Model"
Cohesion: 0.10
Nodes (10): Department, Employee, Position, User, DatabaseSeeder, Illuminate\Database\Eloquent\Factories\HasFactory, Illuminate\Database\Eloquent\Model, Illuminate\Database\Seeder (+2 more)

### Community 38 - "getDatasetMeta"
Cohesion: 0.09
Nodes (32): afterDatasetsUpdate(), buildOrUpdateControllers(), Co(), _destroyDatasetMeta(), fd(), generateLabels(), getDatasetMeta(), getDataVisibility() (+24 more)

### Community 39 - "eh"
Cohesion: 0.11
Nodes (20): bo(), ea(), eh(), Gc(), getMaximumSize(), greyscale(), gu(), Hn() (+12 more)

### Community 40 - "fa"
Cohesion: 0.12
Nodes (22): Aa(), cf(), da(), ef(), fa(), Ia(), Jc(), Ln() (+14 more)

### Community 41 - "x"
Cohesion: 0.19
Nodes (23): dd(), dt(), Ft(), nr(), checkValidity(), connectedCallback(), disabled(), disconnectedCallback() (+15 more)

### Community 42 - "notifyEditorElement"
Cohesion: 0.11
Nodes (22): actionIsExternal(), canInvokeAction(), compositionControllerDidBlur(), compositionControllerDidSyncDocumentView(), compositionDidAddAttachment(), compositionDidChangeAttachmentPreviewURL(), compositionDidChangeCurrentAttributes(), compositionDidChangeDocument() (+14 more)

### Community 43 - "_each"
Cohesion: 0.07
Nodes (38): Aa(), addControllers(), addElements(), addPlugins(), addScales(), buildOrUpdateElements(), clear(), da() (+30 more)

### Community 44 - "getDatasetMeta"
Cohesion: 0.10
Nodes (28): afterDatasetsUpdate(), generateLabels(), getDatasetMeta(), getDataVisibility(), _getLegendItemAt(), getMaxBorderWidth(), getStyle(), _handleEvent() (+20 more)

### Community 45 - "St"
Cohesion: 0.12
Nodes (23): At(), average(), dataset(), Fa(), getCenterPoint(), getMaximumSize(), getProps(), hasValue() (+15 more)

### Community 46 - "Filament\Resources\Pages\EditRecord"
Cohesion: 0.11
Nodes (9): EditSoltemInstallation, EditSoltemRequest, EditDepartment, EditEmployee, EditSoltemInstallation, EditSoltemRequest, EditSoltem, EditUser (+1 more)

### Community 47 - "Qt"
Cohesion: 0.18
Nodes (15): Af(), drawBackground(), drawCaret(), drawGrid(), ff(), getCaretPosition(), getDistanceFromCenterForValue(), getPointLabelContext() (+7 more)

### Community 48 - "Soltem"
Cohesion: 0.11
Nodes (7): AvailableSoltem, ListSoltems, EmployeesChart, SoltemsChart, Soltem, Filament\Widgets\ChartWidget, Filament\Widgets\TableWidget

### Community 49 - "static"
Cohesion: 0.10
Nodes (5): EmployeeResource, SoltemRequestResource, UserFactory, Illuminate\Database\Eloquent\Factories\Factory, static

### Community 50 - "getLocationRange"
Cohesion: 0.08
Nodes (37): canAcceptDataTransfer(), canDecreaseNestingLevel(), canIncreaseNestingLevel(), compositionControllerDidFocus(), compositionDidRequestChangingSelectionToLocationRange(), createDOMRangeFromPoint(), createLocationRangeFromDOMRange(), decreaseNestingLevel() (+29 more)

### Community 51 - "kn"
Cohesion: 0.20
Nodes (12): color(), darken(), desaturate(), hexString(), jn(), jo(), kn(), lighten() (+4 more)

### Community 52 - "devDependencies"
Cohesion: 0.10
Nodes (19): axios, concurrently, laravel-vite-plugin, devDependencies, axios, concurrently, laravel-vite-plugin, tailwindcss (+11 more)

### Community 53 - "_notify"
Cohesion: 0.17
Nodes (15): al(), cancel(), _createDescriptors(), _descriptors(), dl(), Do(), getPlugin(), _notify() (+7 more)

### Community 54 - "Filament\Resources\Pages\ListRecords"
Cohesion: 0.14
Nodes (7): ListSoltemInstallations, ListSoltemRequests, ListDepartments, ListEmployees, ListSoltemInstallations, ListUsers, Filament\Resources\Pages\ListRecords

### Community 55 - "VerifyIsAdmin.php"
Cohesion: 0.22
Nodes (9): VerifyIsActive, VerifyIsAdmin, AdminPanelProvider, AppPanelProvider, Closure, Filament\Panel, Filament\PanelProvider, Illuminate\Http\Request (+1 more)

### Community 56 - "appendBlockForElement"
Cohesion: 0.18
Nodes (20): appendAttachmentWithAttributes(), appendBlockForAttributesWithElement(), appendBlockForElement(), appendBlockForTextNode(), appendEmptyBlock(), appendPiece(), appendStringWithAttributes(), find() (+12 more)

### Community 57 - "ra"
Cohesion: 0.09
Nodes (25): Ah(), _d(), dl(), getBasePixel(), getBasePosition(), getBaseValue(), hc(), interpolate() (+17 more)

### Community 58 - "toString"
Cohesion: 0.16
Nodes (14): getMinDaysInFirstWeek(), getMinimumDaysInFirstWeek(), getStartOfWeek(), getWeekendDays(), getWeekendWeekdays(), getWeekSettings(), qf(), qr() (+6 more)

### Community 59 - "uu"
Cohesion: 0.20
Nodes (10): contains(), du(), Fo(), fu(), getRange(), Ns(), pu(), Us() (+2 more)

### Community 60 - "getDataset"
Cohesion: 0.09
Nodes (30): addElements(), bindEvents(), bindResponsiveEvents(), bindUserEvents(), buildOrUpdateControllers(), buildOrUpdateElements(), _checkEventBindings(), _dataCheck() (+22 more)

### Community 61 - "Filament\Resources\Pages\CreateRecord"
Cohesion: 0.18
Nodes (9): CreateSoltemInstallation, CreateSoltemRequest, CreateDepartment, CreateEmployee, CreateSoltemInstallation, CreateSoltemRequest, CreateSoltem, CreateUser (+1 more)

### Community 62 - "Km"
Cohesion: 0.21
Nodes (14): Br(), eras(), extract(), kl(), Km(), mc(), meridiems(), months() (+6 more)

### Community 63 - "isHorizontal"
Cohesion: 0.22
Nodes (17): _computeLabelItems(), _computeLabelSizes(), computeTickLimit(), _drawArgs(), _getLabelCapacity(), _getLabelSize(), _getLabelSizes(), _getXAxisLabelAlignment() (+9 more)

### Community 64 - "E"
Cohesion: 0.17
Nodes (16): bu(), _calculatePadding(), _computeGridLineItems(), drawBorder(), E(), Fs(), getPixelForDecimal(), getPixelForTick() (+8 more)

### Community 65 - "parse"
Cohesion: 0.07
Nodes (50): add(), average(), buildTicks(), count(), determineDataLimits(), diff(), diffNow(), endOf() (+42 more)

### Community 66 - "SoltemRequest"
Cohesion: 0.15
Nodes (4): SoltemOverview, ListSoltemRequests, SoltemRequest, Filament\Widgets\StatsOverviewWidget

### Community 67 - "mutationIsSignificant"
Cohesion: 0.18
Nodes (13): didMutate(), findSignificantMutations(), getEndData(), getMutationsByType(), getMutationSummary(), getTextChangesFromCharacterData(), getTextChangesFromChildList(), getTextMutationSummary() (+5 more)

### Community 68 - "Lo"
Cohesion: 0.33
Nodes (6): en(), formatToParts(), Lo(), offsetName(), Qm(), sg()

### Community 70 - "Uc"
Cohesion: 0.24
Nodes (10): alpha(), Bc(), Bn(), $c(), Ho(), ih(), Uc(), Xt() (+2 more)

### Community 71 - "format"
Cohesion: 0.18
Nodes (13): Bf(), format(), formatWithSystemDefault(), getLabelAndValue(), getLabelForValue(), hu(), isValidIANAZone(), isValidSpecifier() (+5 more)

### Community 72 - "constructor"
Cohesion: 0.12
Nodes (16): cg(), chartOptionScopes(), constructor(), dn(), features(), getDevicePixelRatio(), getMeta(), getPossibleOffsets() (+8 more)

### Community 73 - "draw"
Cohesion: 0.17
Nodes (22): adjustHitBoxes(), Bl(), Cd(), _computeTitleHeight(), Cs(), dr(), draw(), drawBody() (+14 more)

### Community 74 - "composer.json"
Cohesion: 0.18
Nodes (10): description, extra, laravel, dont-discover, license, minimum-stability, name, prefer-stable (+2 more)

### Community 75 - "scripts"
Cohesion: 0.18
Nodes (11): scripts, dev, post-root-package-install, post-update-cmd, test, Composer\\Config::disableProcessTimeout, npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite, @php artisan config:clear --ansi (+3 more)

### Community 76 - "date-time-picker.js"
Cohesion: 0.29
Nodes (7): a(), e(), f(), i(), Ii(), o(), t()

### Community 77 - "notifyPlugins"
Cohesion: 0.15
Nodes (19): addEventListener(), afterDraw(), bindEvents(), bindResponsiveEvents(), bindUserEvents(), _computeLabelArea(), _drawDataset(), _drawDatasets() (+11 more)

### Community 78 - "fromObject"
Cohesion: 0.16
Nodes (18): bt(), data(), daysInMonth(), fromObject(), Gr(), im(), ni(), od() (+10 more)

### Community 79 - "_convertTicksToLabels"
Cohesion: 0.40
Nodes (5): afterTickToLabelConversion(), beforeTickToLabelConversion(), _convertTicksToLabels(), generateTickLabels(), _tickFormatFunction()

### Community 80 - "formatDateTimeFromString"
Cohesion: 0.22
Nodes (11): expandFormat(), formatDateTimeFromString(), formatDurationFromString(), jl(), $l(), macroTokenToFormatOpts(), ng(), num() (+3 more)

### Community 81 - "Filament\Resources\Pages\ViewRecord"
Cohesion: 0.27
Nodes (4): ViewSoltemInstallation, ViewSoltemRequest, ViewSoltem, Filament\Resources\Pages\ViewRecord

### Community 84 - "fromDateTimes"
Cohesion: 0.31
Nodes (10): after(), before(), fi(), fromDateTimes(), fromISO(), Jr(), mapEndpoints(), mapUnits() (+2 more)

### Community 85 - "sc"
Cohesion: 0.22
Nodes (10): describe(), Em(), fromHTTP(), hg(), Mn(), offset(), ql(), sc() (+2 more)

### Community 86 - "require-dev"
Cohesion: 0.22
Nodes (9): require-dev, fakerphp/faker, laravel/pail, laravel/pint, laravel/sail, mockery/mockery, nunomaduro/collision, pestphp/pest (+1 more)

### Community 87 - "removeBlockAttribute"
Cohesion: 0.28
Nodes (9): applyBlockAttribute(), findRangesOfBlocks(), findRangesOfPieces(), getPromise(), moveSelectedRangeForward(), perform(), pickFiles(), removeBlockAttribute() (+1 more)

### Community 88 - "Ii"
Cohesion: 0.28
Nodes (9): Ii(), mr(), na(), pe(), Pn(), ta(), ti(), vr() (+1 more)

### Community 89 - "Dt"
Cohesion: 0.31
Nodes (9): defaultZone(), Dt(), Et(), fromDurationLike(), fromMillis(), fromSeconds(), isDuration(), normalizeZone() (+1 more)

### Community 90 - "setZone"
Cohesion: 0.18
Nodes (13): Ds(), equals(), fromFormatParser(), fromJSDate(), gs(), hasDST(), instance(), invalid() (+5 more)

### Community 91 - "merge"
Cohesion: 0.25
Nodes (8): abutsStart(), difference(), intersection(), isEmpty(), merge(), overlaps(), union(), xor()

### Community 92 - "create"
Cohesion: 0.18
Nodes (14): clone(), create(), dtFormatter(), Fn(), formatDateTime(), formatDateTimeParts(), formatInterval(), fromOpts() (+6 more)

### Community 94 - "config"
Cohesion: 0.29
Nodes (7): pestphp/pest-plugin, php-http/discovery, config, allow-plugins, optimize-autoloader, preferred-install, sort-packages

### Community 95 - "constructor"
Cohesion: 0.07
Nodes (32): box(), canBeConsolidatedWith(), canBeGroupedWith(), Ci(), compositionControllerDidRender(), constructor(), fromUCS2String(), get() (+24 more)

### Community 96 - "kf"
Cohesion: 0.29
Nodes (7): An(), Ao(), Cn(), eg(), explainFromTokens(), ig(), kf()

### Community 97 - "ru"
Cohesion: 0.29
Nodes (7): au(), ga(), getPadding(), il(), ou(), pa(), ru()

### Community 98 - "fit"
Cohesion: 0.15
Nodes (17): getSignificantNodesForIndex(), calculateLabelRotation(), Cf(), ct(), df(), fit(), _fitCols(), _fitRows() (+9 more)

### Community 99 - "plus"
Cohesion: 0.22
Nodes (11): Ce(), Dc(), Ec(), Io(), minus(), mu(), negate(), plus() (+3 more)

### Community 100 - "require"
Cohesion: 0.33
Nodes (6): require, filament/filament, flowframe/laravel-trend, laravel/framework, laravel/tinker, php

### Community 106 - "ci"
Cohesion: 0.17
Nodes (12): Cc(), ci(), fromISOTime(), fromSQL(), he(), Ic(), Mm(), nc() (+4 more)

### Community 107 - "removeEventListener"
Cohesion: 0.40
Nodes (6): Ei(), hr(), nl(), qu(), removeEventListener(), zu()

### Community 108 - "shiftTo"
Cohesion: 0.40
Nodes (6): jm(), normalizeUnit(), rescale(), shiftTo(), shiftToAll(), toObject()

### Community 109 - "_sync"
Cohesion: 0.33
Nodes (6): _onDataPop(), _onDataPush(), _onDataShift(), _onDataSplice(), _onDataUnshift(), _sync()

### Community 111 - "psr-4"
Cohesion: 0.40
Nodes (5): autoload, psr-4, App\\, Database\\Factories\\, Database\\Seeders\\

### Community 115 - "post-autoload-dump"
Cohesion: 0.50
Nodes (4): post-autoload-dump, Illuminate\\Foundation\\ComposerScripts::postAutoloadDump, @php artisan filament:upgrade, @php artisan package:discover --ansi

### Community 116 - "post-create-project-cmd"
Cohesion: 0.50
Nodes (4): post-create-project-cmd, @php artisan key:generate --ansi, @php artisan migrate --graceful --ansi, @php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\

### Community 117 - "resolvedOptions"
Cohesion: 0.20
Nodes (10): ae(), formatOffset(), ianaName(), isEnglish(), listingMode(), name(), relFormatter(), resolvedLocaleOptions() (+2 more)

### Community 120 - "ke"
Cohesion: 0.50
Nodes (4): ke(), weeksInLocalWeekYear(), weeksInWeekYear(), zl()

### Community 121 - "autoload-dev"
Cohesion: 0.67
Nodes (3): autoload-dev, psr-4, Tests\\

### Community 122 - "keywords"
Cohesion: 0.67
Nodes (3): keywords, framework, laravel

### Community 134 - "_updateHiddenIndices"
Cohesion: 0.67
Nodes (3): dd(), _getUniformDataChanges(), _updateHiddenIndices()

### Community 135 - "It"
Cohesion: 0.67
Nodes (3): fc(), Gm(), It()

### Community 136 - "toSQL"
Cohesion: 0.67
Nodes (3): toSQL(), toSQLDate(), toSQLTime()

## Knowledge Gaps
- **56 isolated node(s):** `Controller`, `$schema`, `name`, `type`, `description` (+51 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **21 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `u()` connect `u` to `stat/chart.js`, `markdown-editor.js`, `select.js`, `echo.js`, `V`, `getContext`, `updateElements`, `support.js`, `_update`, `get`, `D`, `updateElements`, `inRange`, `insertString`, `ka`, `kr`, `draw`, `_a`, `C`, `_update`, `qe`, `ra`, `E`, `mutationIsSignificant`, `constructor`, `draw`, `date-time-picker.js`, `notifyPlugins`, `constructor`, `fit`, `plus`?**
  _High betweenness centrality (0.070) - this node is a cross-community bridge._
- **Why does `constructor()` connect `constructor` to `rich-editor.js`, `createNodes`, `markdown-editor.js`, `stat/chart.js`, `o`, `deleteInDirection`, `x`, `setDocument`, `render`, `insertString`, `u`?**
  _High betweenness centrality (0.058) - this node is a cross-community bridge._
- **Why does `x()` connect `x` to `V`, `rich-editor.js`, `select.js`, `constructor`?**
  _High betweenness centrality (0.041) - this node is a cross-community bridge._
- **Are the 2 inferred relationships involving `_update()` (e.g. with `m()` and `y()`) actually correct?**
  _`_update()` has 2 INFERRED edges - model-reasoned connections that need verification._
- **Are the 2 inferred relationships involving `_update()` (e.g. with `m()` and `u()`) actually correct?**
  _`_update()` has 2 INFERRED edges - model-reasoned connections that need verification._
- **Are the 20 inferred relationships involving `te()` (e.g. with `je()` and `Pr()`) actually correct?**
  _`te()` has 20 INFERRED edges - model-reasoned connections that need verification._
- **Are the 58 inferred relationships involving `u()` (e.g. with `e()` and `Ii()`) actually correct?**
  _`u()` has 58 INFERRED edges - model-reasoned connections that need verification._