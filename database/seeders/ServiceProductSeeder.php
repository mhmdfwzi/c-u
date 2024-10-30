<?php

namespace Database\Seeders;

use App\Models\ServiceProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ServiceProduct::create([
                'type' => 'service',
                'title' => "صيانة المصاعد",
                'keywords' => "",
                'image' => "",
                'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
                107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
                minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تعد
                صيانة المصاعد جزءًا مهمًا من الحفاظ على المصاعد في حالة مثالية، خاصة لأنها أنظمة
                متطورة نوعاً ما، وتحتوي على العديد من الأجزاء الأخرى التي تتطلب صيانة روتينية، لتؤمن
                ذلك ركوباً آمناً وغير متقطعٍ للركاب، عن طريق التأكد من سلامة الأسلاك وتشحيم
                الماكينات. كما أن العديد من العوامل قد تؤثر بمكونات المصعد، مثل الرطوبة
                والاستخدام الخاطئ له أو مشاكل التيار الكهربائي، بالتالي فإن فحص المصعد بشكل
                كامل بين الحين والآخر يمكن أن يساعد في إطالة عمر المصعد.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
                mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
                Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
                minor-bidi"><o:p></o:p></span></p>
                
                <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
                107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
                minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">لذلك
                عليك البحث عن أفضل شركات صيانة مصاعد التي تقوم بتقديم هذه الخدمة بشكل احترافي،
                وتعتبر مؤسسة المصاعد الدولية من أفضل شركات صيانة المصاعد في السعودية وتعمل على
                تقديم خدمات متميزة، وباتباع الإرشادات يمكن للعملاء أن يطمئنوا إلى أن مصاعدهم
                تعمل كما ينبغي.<o:p></o:p></span></p>                            
                                        ',
                 'active' => 1, 'main_page' => 1,
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        ServiceProduct::create([
            'type' => 'service',
            'title' => "تركيب المصاعد",
            'keywords' => "",
            'image' => "",
            'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">المصاعد
            جزء من الحياة اليومية لكثير من الناس، يأخذوننا من طابق إلى آخر بسرعة وكفاءة، في
            الكثير من الأماكن سواء في المنازل أو الأماكن التجارية ولذلك عليك بالبحث بشكل
            دقيق عن أفضل شركات تركيب مصاعد بأسعار مميزة وجودة عالية وتقدم خدمات الصيانة
            والمتابعة الدورة ما بعد التركيب.<o:p></o:p></span></p><p class="MsoNormal" dir="RTL">
            
            </p><p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">فريق
            الخبراء لدينا هنا لمساعدتك في تركيب المصعد الخاص بك، سنضمن أن العملية برمتها
            تسير بسلاسة وسرعة، حتى تتمكن من العودة إلى حياتك اليومية، وإن الفنيين لدينا
            مدربين تدريباً عالياً وذوي خبرة في جميع جوانب تركيب المصعد، من التقييم الأولي
            لمساحتك إلى الاختبار والفحص النهائيين. نحن نضمن أن عملنا سوف يلبي أعلى معايير
            السلامة لراحة بالك، خاصة وأننا لدينا أفضل فريق من الفنيين والمهندسين المتخصصين
            في تركيب المصاعد، كما أننا نقوم بالمتابعة مع العميل بشكل مستمر بعد تركيب
            المصاعد، وتلتزم بمواعيد التسليم المتفق عليها.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
            mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
            Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
            minor-bidi"><o:p></o:p></span></p>                            
                                    ',
             'active' => 1, 'main_page' => 1,
            'created_at' => now(),
            'updated_at' => now(),
    ]);
    ServiceProduct::create([
        'type' => 'service',
        'title' => "قطع غيار المصاعد",
        'keywords' => "",
        'image' => "",
        'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
        107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
        minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">لا
        شك أن صيانة المصاعد بشكل مستمر تساهم في حماية المصاعد من التعرض للأعطال
        المختلفة، ولابد من توافر قطع غيار مصاعد مناسبة أثناء إجراء عملية الصيانة
        الدورية، وتحتوي مؤسسة المصاعد الدولية على جميع أنواع قطع غيار مصاعد مثل محركات
        المصاعد المختلفة، وأبواب المصاعد، وعلبة زيت المصعد، ومفاتيح المصاعد، والكشافات
        الموجودة في المصاعد وغيرها من قطع غيار المصاعد الأخرى، خاصة وأننا من الشركات
        الرائدة التي تقدم قطع الغيار ذات جودة عالية، إضافة إلى تقديم خدمة ضمان علي قطع
        غيار المصاعد.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
        font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
        minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
        mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi"><o:p></o:p></span></p>                            
                                ',
         'active' => 1, 'main_page' => 1,
        'created_at' => now(),
        'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'service',
    'title' => "تحديث وتطوير المصعد",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">هو
    عملية ترقية الأجزاء المهمة من المصعد من أجل أن يكون قادراً على التعامل مع
    التكنولوجيا الجديدة، وتقديم أداء أفضل، وتحسين مستوى السلامة</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi">، </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">وذلك
    لأن كل المصاعد لها عمر افتراضي محدد قد يصل إلى 25 عام، وحينها قد تكون تكلفة
    صيانة مرتفعة خاصة مع الحاجة إلى إجراء الصيانة متكررة، وهنا تظهر أهمية خدمة
    تحديث الأجزاء التالفة والقديمة من المصعد؛ وذلك لتحسين جودة عمل المصعد وكفاءته.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p><p class="MsoNormal" dir="RTL">
    
    </p><p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">نقدم
    حلاّت مبتكرة لتحديث المصاعد القديمة وجعلها متطابقة مع المعايير الحديثة، كما يتضمن
    ذلك تحديث الأجزاء الهيكلية والتكنولوجيا لضمان أداء أكثر كفاءة وأمان.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>                            
                            ',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'service',
    'title' => "تنظيف المصاعد",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">نوفر
    خدمة تنظيف المصاعد لضمان عمل المصاعد علي أكمل وجه ولسلامة عملائنا وراحتهم.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'service',
    'title' => "استشارات المصاعد",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">فريق
    الاستشارات لدينا متخصص في تقديم النصائح والمشورة المهنية لاختيار المصاعد
    المناسبة لاحتياجاتك. نساعدك في اتخاذ القرارات الصائبة وتنفيذ حلول مصاعد مخصصة
    تناسب متطلبات مبناك بدقة.</span><span lang="AR-SA" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
    minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'service',
    'title' => "خدمات ما بعد البيع",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">هذا
    القسم هو اهم من الاقسام السابقة والذي يحدد مصداقية الشركة ومدى ثقتها في
    منتجاتها من حيث الجودة والكفاءة في الاداء والراحة في الاستخدام واستمرارية في
    الأداء وعدم وجود اعطال، فتقوم شركتنا اثباتا للمصداقية وتجويدا في خدماتنا بإعطاء
    العميل فترة ضمان تبدأ من يوم التسليم الابتدائي وخلال هذه الفترة تقوم الشركة
    بعمل الصيانة الدورية الوقائية مجانا بدون اي رسوم، وفي حال الصيانات فإن الشركة
    تلبي اعطال مواقع الصيانة خلال 24 ساعة من التبليغ.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]);


ServiceProduct::create([
    'type' => 'product',
    'title' => "كابينة",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">أشكال وألوان حسب
    الاختيار، لكنها مصنوعة من الصاج المجلفن ويبطن من الداخل بخشب كونتر وتلبس بالأستيل
    او الألومنيوم او الفورميكا على حسب الاختيار كما يتم الاختيار ما بين عدة اشكال
    والوان للأسقف والارضيات والاكسسوارات<o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 1,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => "أبواب اوتوماتيكية والنصف اوتوماتيكية",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تعتبر
    ابواب مصاعد الركاب من أهم الأجزاء وأدقها في المصعد التي يجب الاهتمام باختيارها
    جيداً، خاصة وأن طريقة تشغيل ابواب المصاعد ليست واحدة، فبعض ابواب المصاعد تكون
    يدوية بينما تعتمد الأخرى على أبواب مصاعد أتوماتيك، وقد تكون ابواب المصاعد أول
    الأجزاء التالفة في المصعد، لذلك فهي تحتاج إلى صيانة دورية من دون إهمالها. <o:p></o:p></span></p><p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تقدم
    مؤسسة المصاعد الدولية كافة أنواع ابواب مصاعد الركاب بكافة الماركات العالمية،
    وكذلك خدمات توريد وتركيب وصيانة المصاعد بأنواعها المختلفة.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p><p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">أولا..
    ابواب اوتوماتيكية</span><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi"><o:p></o:p></span></p><p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تستخدم
    أبواب المصاعد الأوتوماتيكية بشكل شائع في المصاعد الجديدة والمصاعد ذات الميزانية
    العالية، فهي أكثر أمانًا وراحة من الأبواب اليدوية أو النصف أوتوماتيكية، لأننها لا
    تتطلب بذل جهد من الركاب لفتح أو إغلاق الباب</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi">، كما أنها </span><span lang="AR-SA" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
    minor-latin">أكثر راحة من الأبواب اليدوية أو النصف أوتوماتيكية، وأكثر أمانًا من
    الأبواب اليدوية أو النصف أوتوماتيكية.<o:p></o:p></span></p><p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">ثانياً.. </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin">ابواب نصف اوتوماتيكية</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p><p class="MsoNormal" dir="RTL">
    
    <span lang="AR-SA" dir="RTL" style="font-size:16.0pt;line-height:107%;font-family:
    &quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;
    mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:
    EN-US;mso-bidi-language:AR-SA">تستخدم أبواب المصاعد النصف أوتوماتيكية بشكل شائع
    في المصاعد الجديدة أو المصاعد ذات الميزانية المحدودة، فهي أقل تكلفة من الأبواب
    الأوتوماتيكية بالكامل، ولكنها أكثر أمانًا من الأبواب اليدوية، كما أنها لا تتطلب
    صيانة منتظمة، وأقل تكلفة من الأبواب الأوتوماتيكية بالكامل، وأكثر أمانًا من
    الأبواب اليدوية</span><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
    EN-US;mso-bidi-language:AR-SA">.</span><br></p>',
     'active' => 1, 'main_page' => 1,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => "المحركات",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">بشكل
    عام يتكون المصعد سواء كان مصعد منزلي أو مصعد لأي مكان تجاري أو مستشفى أو غيره
    من أنظمة تشغيل عدة تعمل جميعها مع بعضها البعض حتى تتمكن من تلبية احتياجات
    المباني الخدمية والسكنية المختلفة، ومن هنا قامت شركات المصاعد بتطوير محركات
    وماكينات المصاعد حتى تتمكن من القيام بالوظيفة المرجوة ألا وهي نقل البضائع
    والأشخاص بين الطوابق المختلفة، ولدينا في المصاعد الدولية أفضل المحركات
    المستخدمة في السوق السعودي وأكثرها جودة.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 1,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => "مصعد بانوراما داخلي / خارجي",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">مصاعد
    البانوراما</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi"> </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin">هي خاصة بنقل الافراد في الأماكن التي
    تتميز بمساحة رؤية واسعة أمامها أو في المولات التجارية لرؤية المحلات والمعروضات
    المختلفة أثناء الصعود أو الهبوط</span><span lang="AR-SA" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
    minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">، إضافة
    إلى أنه </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">لا
    يحتاج إلى بناء بئر تقليدي إذ أنه يحتوي على بئر خاص به مصنوع من الحديد والزجاج
    الشفاف كما أنه لا يحتاج إلى حفرة أرضية أو إلى غرفة علوية أو أي ارتفاع عن مستوى
    المصعد.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi"><o:p></o:p></span></p><p class="MsoNormal" dir="RTL">
    
    <span lang="AR-SA" dir="RTL" style="font-size:16.0pt;line-height:107%;font-family:
    &quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;
    mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;
    mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">نحن
    في المصاعد الدولية ن</span><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">تميز
    بتقديم أحدث وأفخم أنواع المصاعد البانوراما، والتي تتميز بأشكالها وأنواعها
    المتميزة، والتي يمكن تركيبها في داخل أو خارج المباني أو الفلل.</span><br></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => "مصعد فوجي",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تتمتع
    مصاعد فوجي التي تقدمها مؤسسة المصاعد الدولية بسمعة ممتازة في السوق السعودي، حيث
    تُعتبر شركة فوجي ـ وهي الشركة اليابانية المصنعة للمصاعد، واحدة من أكبر وأعرق
    الشركات المصنعة للمصاعد في العالم، ونعمل بالتعاون مع فوجي لتقديم جميع مصاعدها
    التي تتميز بالجودة العالية والتصميم المبتكر، خاصة وأنها مزودة بأحدث التقنيات
    والمميزات المتطورة وتعمل هذه التقنيات على زيادة كفاءة الرفع وتقليل استهلاك
    الطاقة؛ مما يعود بالفائدة على المستخدمين والبيئة على حد سواء، إضافة إلى
    التصاميم المبتكرة لكي تتناسب مع أنماط العملاء واحتياجاتهم، فضلاً عن ضمان شركتنا
    لجودة المصعد والأمان والموثوقية العالية.<o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => "مصعد بانوراما فضي",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">مصاعد
    البانوراما هي عبارة عن مصاعد تقوم بنقل الأفراد للأدوار العليا كأي نوع آخر من
    المصاعد، ولكن يتميز هذا النوع عن باقي الأنواع بتصميمه الجميل وشكله الجذاب
    والمريح للعين، حيث يتميز بلونه الفضي </span><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
    Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-font-family:Calibri;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:
    EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">ال</span><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
    Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-font-family:Calibri;
    mso-hansi-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:
    EN-US;mso-bidi-language:AR-SA">مناسب لأغلب الديكورات، إضافة إلى سعره الذي
    يتناسب مع أغلب الفئات، كما يتوفر به العديد من وسائل الأمان</span><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
    Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-font-family:Calibri;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:
    EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> خاصة وأن </span><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
    Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-font-family:Calibri;
    mso-hansi-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:
    EN-US;mso-bidi-language:AR-SA">حركة المصعد البانوراما تكون أثر هدوء وانسيابية.</span><br></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => " مصعد بانوراما دائري",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">مصاعد
    بانوراما دائريه هي مطلب الكثير من العملاء ممن يبحثون عن مصعد يعمل بكفاءة عالية،
    وفي نفس الوقت لا يؤثر على ديكور المكان وجماله بالسلب، بل يزيد من جمال المكان
    ولا يشغل حيز كبير منه، حيث يتميز بكونه </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi">م</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">ناسب
    لجميع الأماكن العامة أو السكنية، وتتيح الرؤية للراكبين من جميع الجهات، كما أنها
    تضفي مظهرًا راقيًا على للمبنى وذلك لأن الكبائن مصنوعة من الزجاج ذو الشكل الرائع،
    فضلاً عن أنها آمنة وسلسة الحركة </span><span lang="AR-SA" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
    minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">و</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin">أسعارها تكون مناسبة للجميع.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]); ServiceProduct::create([
    'type' => 'product',
    'title' => "مصعد هيدروليك",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">هي
    عبارة عن مصاعد يتم تركيبها في المباني المختلفة دون الحاجة لأعمال الحفر
    والتكسير، كما في حالة المصاعد الكهربائية القديمة ومصاعد الجر، كما أنها موفرة
    للكهرباء ويكون أقصي ارتفاع لها 4 أدوار </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
    Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>
    
    <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">يوجد
    العديد من المميزات التي تتميز بها مصاعد الهيدروليك المقدمة من مؤسسة المصاعد
    الدولية عن باقي انواع المصاعد، ومنها </span><span lang="AR-SA" style="font-size:
    16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:
    Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;
    mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi">أن </span><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">معداتها
    تكون عالية الجودة والكفاءة وتصميمها يكون إبداعي ومختلف، والعمر الافتراضي لهذه
    المصاعد يكون طويل ويتحمل حمولة كبيرة من الأوزان، وبها مستوى بها الأمان بها أعلى
    من المصاعد الكهربائية</span><span lang="AR-SA" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
    minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">.<o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]);


ServiceProduct::create([
    'type' => 'product',
    'title' => "مصاعد طعام",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">مصاعد
    الطعام أصبحت حاجة ملحة في المنازل والمطاعم والفنادق لتقديم الطعام ساخنا وفي
    أسرع وقت، كما أنها لم تعد مصاعد الطعام فقط تستخدم فقط في رفع الطعام ولكن أصبحت
    تستخدم في البنوك والمؤسسات والمحلات التجارية في نقل الأغراض بين الأدوار، وهو ما
    جعل الكثير من الشركات تعمل على تطوير مقراتها وتركيب أنواع متنوعة من مصاعد
    الطعام وغيرها</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
    mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">، خاصة وأن تحمل
    أثقال </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;
    font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تتراوح
    ما بين 50 كجم و300 كجم ويتم استخدام الفولاذ المقاوم للصدأ من الداخل للحماية
    والحفاظ على بيئة النقل.</span><span lang="AR-SA" style="font-size:16.0pt;
    line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;
    mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
    minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]);

ServiceProduct::create([
    'type' => 'product',
    'title' => "مصعد بضائع",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تتمثل
    المهمة الرئيسية التي يتم تركيب مصاعد البضائع الهيدروليكية لأجلها في تسهيل
    وتسريع نقل المنتجات بين الطوابق صعودًا وهبوطًا مما يساهم في زيادة انتاجية
    المؤسسة بفعل سرعة الإنجاز، حيث أن حمولتها تصل إلى 10طن وتستخدم بالمستودعات
    والشركات والمعارض، كما أنها تتميز بالمتانة الفائقة والقدرات العالية التي تكفل
    حمل المنتجات المتعددة والثقيلة، والقدرات التقنية المتطورة المزودة بأساليب تحكّم
    دقيقة وبوسائل كشف الأعطال.<o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]);


ServiceProduct::create([
    'type' => 'product',
    'title' => "مصعد مستشفيات",
    'keywords' => "",
    'image' => "",
    'content' =>'<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
    107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
    minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تعد
    المستشفيات من المباني الخدمية التي تستقبل الكثير من الزوار يوميًا، لذلك تحتاج
    إلى مجموعة مصاعد ذات كفاءة عالية وأنظمة تشغيل معينة، حتى تضمن راحة الموظفين
    والمرضى والزوار بشكل يومي، حيث لا تحتاج المستشفى إلى مصاعد لنقل المرضى
    والعاملين فقط، بل تحتاج أيضًا إلى المصاعد لنقل الأجهزة الطبية الثقيلة ومصاعد
    مخصصة للكراسي المتحركة لذوي الهمم.</span><span lang="AR-SA" style="font-size:
    16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:
    Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;
    mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
    minor-bidi"><o:p></o:p></span></p>',
     'active' => 1, 'main_page' => 0,
    'created_at' => now(),
    'updated_at' => now(),
]);

    }
}