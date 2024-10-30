<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Page::create([
            'title' => "من نحن ؟",
            'keywords' => '',
            'image' => '',
            'content' => "                                    <p>                                    أسست مؤسسة المصاعد الدولية نشاطها بالمملكة العربية السعودية منذ عام
            1427هـ / 2007م؛ وطوال هذه المدة أصبح اسم ”المصاعد الدولية“ عالمة فارقه
            لدى السوق السعودي الذي يهتم بالجودة العالية مقابل السعر المنافس والتنفيذ
            السريع، واستطاعت أن تلبي رغبة عمالئها عن طريق اختيار أجود الخامات في
            العمل واستخدام أحدث وسائل التكنولوجيا لجميع أنواع المباني، والتنفيذ عن طريق
            فنيين متخصصين على أعلى درجة من المهارة والسرعة وتحت إشراف مهندسين
            على درجة عالية من التخصص والكفاءة في أعمال التركيب و الصيانة، في عالم
            المصاعد الكهربائية وملحقاتها من محركات وأبواب وكبائن ووحدات التحكم
            المتطورة ونظم األمان عالية الجودة.</p><p>
            نسعى دائما نحو التفوق والتميز بين جميع شركات المصاعد وذلك اعتمادا على
            الجودة – التكلفة والزمن ، لذلك نحن متحمسون لما نقوم به وهو ارضاء عمالئنا
            وهذا هو هدفنا األول وليس الربح فقط، إضافة إلى تعظيم صناعة المصاعد
            وخدمات ما بعد البيع كالضمان المقدم بعد تشغيل المصعد.</p><p>
            مؤسسة المصاعد الدولية لديها العديد من أنظمة المصاعد التي قادتها الى التميز
            والموثوقية وتلبية رغبات جميع العمالء بدءاً من مصاعد األفراد ومصاعد
            الهيدروليك ومصاعد البضائع ومصاعد الطعام ومصاعد المستشفيات ومصاعد البانوراما إضافة الى المصاعد الداخلية التي ال تحتاج إلى حفر بئر وكراسي الدرج
            الكهربائية. </p><p>
            داخل المصاعد الدولية زرعنا ثقافة داخلية تركز دائ ًما على االهتمام الدقيق
            بالتفاصيل الدقيقة وضمان خدماتنا التي ال تشمل فقط تقديم منتج ذو جودة، ولكن
            أيضا التعليم على طول الطريق ، وقد أدى هذا إلى شهرتنا بتقديم ما يتجاوز توقعات
            العمالء، من خالل نهجنا العملي، وخبرتنا، وتنفيذنا المنهجي، وتسليم المشاريع في
            الوقت المحدد، لقد اكتسبنا الثقة وبنينا عالقة جيدة داخل مجتمعنا التي في النهاية
            جعلتنا متميزين عن منافسينا.</p><p>
            تم اعتماد مؤسسة المصاعد الدولية من قبل المديرية العامة للدفاع المدني والتي
            تعتبر بدورها هي المرجع الرئيسي لجميع شركات المصاعد في المملكة العربية
            السعودية ومن خاللها يتم منح التراخيص للعمل في هذا المجال، لنصبح مساهمين
            بارزين في رؤية المملكة العربية السعودية .2030

                                </p>
                                ",
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Page::create([
            'title' => "أهدافنا",
            'keywords' => '',
            'image' => '',
            'content' => '<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">نطمح
            لأن نكون الشركة الرائدة والمفضلة في تركيب وصيانة المصاعد في المملكة العربية السعودية،
            نحن نسعى جاهدين لتحقيق هذا الهدف من خلال تقديم أفضل حلول المصاعد ذات الجودة
            العالية والتكنولوجيا المتقدمة، وخدمة ورضا العملاء، والاهتمام بالابتكار والتطوير
            المستمر.<o:p></o:p></span></p>                                    
                                            ',
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
        Page::create([
            'title' => "رسالتنا",
            'keywords' => '',
            'image' => '',
            'content' => '<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">نحن
            في مؤسسة المصاعد الدولية نفتخر بتقديم أعلى مستويات التميز والجودة في مجال تصنيع
            وصيانة المصاعد. نعمل جاهدين لتلبية احتياجات عملائنا وتحقيق أهدافهم من خلال
            منتجات وخدمات تتميز بالأمان والأداء، مما جعل أسم "المصاعد الدولية" علامة
            فارقة لدى السوق السعودي الذي يهتم بالجودة العالية مقابل السعر المنافس.</span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
            mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
            Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:
            minor-bidi"><o:p></o:p></span></p>                                    
                                            ',
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
        Page::create([
            'title' => "رؤيتنا",
            'keywords' => '',
            'image' => '',
            'content' => '<p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin">تقديم
            خدماتنا بشكل احترافي وإيجاد الحلول المتعددة؛ كشركة رائدة في السوق المحلي لتركيب
            المصاعد وصيانتها</span><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">، </span><span lang="AR-SA" style="font-size:16.0pt;line-height:107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
            mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
            Calibri;mso-hansi-theme-font:minor-latin">وأن نجعل الشغف دافعنا لتقديم الخدمة
            والجودة المميزة لعملائنا لتحقيق رضاهم الكامل، مع الترسيخ لعلاقتنا مع العملاء، والثقة
            بعلامتنا التجارية</span><span lang="AR-SA" style="font-size:16.0pt;line-height:
            107%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
            minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">.<o:p></o:p></span></p>                                    
                                            ',
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}