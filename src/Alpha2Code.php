<?php

namespace Tourze\GBT2659;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 世界各国和地区名称代码，2字母
 * 实际跟 世界各国和地区名称代码 （ISO-3166-1-2020）基本一样的
 */
enum Alpha2Code: string implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case AL = 'AL';
    case DZ = 'DZ';
    case AF = 'AF';
    case AR = 'AR';
    case AE = 'AE';
    case AW = 'AW';
    case OM = 'OM';
    case AZ = 'AZ';
    case EG = 'EG';
    case ET = 'ET';
    case IE = 'IE';
    case EE = 'EE';
    case AD = 'AD';
    case AO = 'AO';
    case AI = 'AI';
    case AG = 'AG';
    case AT = 'AT';
    case AX = 'AX';
    case AU = 'AU';
    case BB = 'BB';
    case PG = 'PG';
    case BS = 'BS';
    case PK = 'PK';
    case PY = 'PY';
    case PS = 'PS';
    case BH = 'BH';
    case PA = 'PA';
    case BR = 'BR';
    case BY = 'BY';
    case BM = 'BM';
    case BG = 'BG';
    case MP = 'MP';
    case MK = 'MK';
    case BJ = 'BJ';
    case BE = 'BE';
    case IS = 'IS';
    case PR = 'PR';
    case PL = 'PL';
    case BA = 'BA';
    case BO = 'BO';
    case BZ = 'BZ';
    case BW = 'BW';
    case BT = 'BT';
    case BF = 'BF';
    case BI = 'BI';
    case BV = 'BV';
    case KP = 'KP';
    case GQ = 'GQ';
    case DK = 'DK';
    case DE = 'DE';
    case TL = 'TL';
    case TG = 'TG';
    case DO = 'DO';
    case DM = 'DM';
    case RU = 'RU';
    case EC = 'EC';
    case ER = 'ER';
    case FR = 'FR';
    case FO = 'FO';
    case PF = 'PF';
    case GF = 'GF';
    case TF = 'TF';
    case MF = 'MF';
    case VA = 'VA';
    case PH = 'PH';
    case FJ = 'FJ';
    case FI = 'FI';
    case CV = 'CV';
    case FK = 'FK';
    case GM = 'GM';
    case CG = 'CG';
    case CD = 'CD';
    case CO = 'CO';
    case CR = 'CR';
    case GD = 'GD';
    case GL = 'GL';
    case GE = 'GE';
    case GG = 'GG';
    case CU = 'CU';
    case GP = 'GP';
    case GU = 'GU';
    case GY = 'GY';
    case KZ = 'KZ';
    case HT = 'HT';
    case KR = 'KR';
    case NL = 'NL';
    case BQ = 'BQ';
    case SX = 'SX';
    case HM = 'HM';
    case ME = 'ME';
    case HN = 'HN';
    case KI = 'KI';
    case DJ = 'DJ';
    case KG = 'KG';
    case GN = 'GN';
    case GW = 'GW';
    case CA = 'CA';
    case GH = 'GH';
    case GA = 'GA';
    case KH = 'KH';
    case CZ = 'CZ';
    case ZW = 'ZW';
    case CM = 'CM';
    case QA = 'QA';
    case KY = 'KY';
    case CC = 'CC';
    case KM = 'KM';
    case CI = 'CI';
    case KW = 'KW';
    case HR = 'HR';
    case KE = 'KE';
    case CK = 'CK';
    case CW = 'CW';
    case LV = 'LV';
    case LS = 'LS';
    case LA = 'LA';
    case LB = 'LB';
    case LT = 'LT';
    case LR = 'LR';
    case LY = 'LY';
    case LI = 'LI';
    case RE = 'RE';
    case LU = 'LU';
    case RW = 'RW';
    case RO = 'RO';
    case MG = 'MG';
    case IM = 'IM';
    case MV = 'MV';
    case MT = 'MT';
    case MW = 'MW';
    case MY = 'MY';
    case ML = 'ML';
    case MH = 'MH';
    case MQ = 'MQ';
    case YT = 'YT';
    case MU = 'MU';
    case MR = 'MR';
    case US = 'US';
    case UM = 'UM';
    case AS = 'AS';
    case VI = 'VI';
    case MN = 'MN';
    case MS = 'MS';
    case BD = 'BD';
    case PE = 'PE';
    case FM = 'FM';
    case MM = 'MM';
    case MD = 'MD';
    case MA = 'MA';
    case MC = 'MC';
    case MZ = 'MZ';
    case MX = 'MX';
    case NA = 'NA';
    case ZA = 'ZA';
    case AQ = 'AQ';
    case GS = 'GS';
    case SS = 'SS';
    case NR = 'NR';
    case NI = 'NI';
    case NP = 'NP';
    case NE = 'NE';
    case NG = 'NG';
    case NU = 'NU';
    case NO = 'NO';
    case NF = 'NF';
    case PW = 'PW';
    case PN = 'PN';
    case PT = 'PT';
    case JP = 'JP';
    case SE = 'SE';
    case CH = 'CH';
    case SV = 'SV';
    case WS = 'WS';
    case RS = 'RS';
    case SL = 'SL';
    case SN = 'SN';
    case CY = 'CY';
    case SC = 'SC';
    case SA = 'SA';
    case BL = 'BL';
    case CX = 'CX';
    case ST = 'ST';
    case SH = 'SH';
    case KN = 'KN';
    case LC = 'LC';
    case SM = 'SM';
    case PM = 'PM';
    case VC = 'VC';
    case LK = 'LK';
    case SK = 'SK';
    case SI = 'SI';
    case SJ = 'SJ';
    case SZ = 'SZ';
    case SD = 'SD';
    case SR = 'SR';
    case SB = 'SB';
    case SO = 'SO';
    case TJ = 'TJ';
    case TW = 'TW';
    case TH = 'TH';
    case TZ = 'TZ';
    case TO = 'TO';
    case TC = 'TC';
    case TT = 'TT';
    case TN = 'TN';
    case TV = 'TV';
    case TR = 'TR';
    case TM = 'TM';
    case TK = 'TK';
    case WF = 'WF';
    case VU = 'VU';
    case GT = 'GT';
    case VE = 'VE';
    case BN = 'BN';
    case UG = 'UG';
    case UA = 'UA';
    case UY = 'UY';
    case UZ = 'UZ';
    case ES = 'ES';
    case EH = 'EH';
    case GR = 'GR';
    case SG = 'SG';
    case NC = 'NC';
    case NZ = 'NZ';
    case HU = 'HU';
    case SY = 'SY';
    case JM = 'JM';
    case AM = 'AM';
    case YE = 'YE';
    case IQ = 'IQ';
    case IR = 'IR';
    case IL = 'IL';
    case IT = 'IT';
    case IN = 'IN';
    case ID = 'ID';
    case GB = 'GB';
    case VG = 'VG';
    case IO = 'IO';
    case JO = 'JO';
    case VN = 'VN';
    case ZM = 'ZM';
    case JE = 'JE';
    case TD = 'TD';
    case GI = 'GI';
    case CL = 'CL';
    case CF = 'CF';
    case CN = 'CN';
    case MO = 'MO';
    case HK = 'HK';

    public function getLabel(): string
    {
        return match ($this) {
            self::AL => '阿尔巴尼亚',
            self::DZ => '阿尔及利亚',
            self::AF => '阿富汗',
            self::AR => '阿根廷',
            self::AE => '阿拉伯联合酋长国',
            self::AW => '阿鲁巴',
            self::OM => '阿曼',
            self::AZ => '阿塞拜疆',
            self::EG => '埃及',
            self::ET => '埃塞俄比亚',
            self::IE => '爱尔兰',
            self::EE => '爱沙尼亚',
            self::AD => '安道尔',
            self::AO => '安哥拉',
            self::AI => '安圭拉',
            self::AG => '安提瓜和巴布达',
            self::AT => '奥地利',
            self::AX => '奥兰群岛',
            self::AU => '澳大利亚',
            self::BB => '巴巴多斯',
            self::PG => '巴布亚新几内亚',
            self::BS => '巴哈马',
            self::PK => '巴基斯坦',
            self::PY => '巴拉圭',
            self::PS => '巴勒斯坦领土',
            self::BH => '巴林',
            self::PA => '巴拿马',
            self::BR => '巴西',
            self::BY => '白俄罗斯',
            self::BM => '百慕大',
            self::BG => '保加利亚',
            self::MP => '北马里亚纳群岛',
            self::MK => '北马其顿',
            self::BJ => '贝宁',
            self::BE => '比利时',
            self::IS => '冰岛',
            self::PR => '波多黎各',
            self::PL => '波兰',
            self::BA => '波斯尼亚和黑塞哥维那',
            self::BO => '玻利维亚',
            self::BZ => '伯利兹',
            self::BW => '博茨瓦纳',
            self::BT => '不丹',
            self::BF => '布基纳法索',
            self::BI => '布隆迪',
            self::BV => '布韦岛',
            self::KP => '朝鲜',
            self::GQ => '赤道几内亚',
            self::DK => '丹麦',
            self::DE => '德国',
            self::TL => '东帝汶',
            self::TG => '多哥',
            self::DO => '多米尼加共和国',
            self::DM => '多米尼克',
            self::RU => '俄罗斯',
            self::EC => '厄瓜多尔',
            self::ER => '厄立特里亚',
            self::FR => '法国',
            self::FO => '法罗群岛',
            self::PF => '法属波利尼西亚',
            self::GF => '法属圭亚那',
            self::TF => '法属南部领地',
            self::MF => '法属圣马丁',
            self::VA => '梵蒂冈',
            self::PH => '菲律宾',
            self::FJ => '斐济',
            self::FI => '芬兰',
            self::CV => '佛得角',
            self::FK => '福克兰群岛',
            self::GM => '冈比亚',
            self::CG => '刚果（布）',
            self::CD => '刚果（金）',
            self::CO => '哥伦比亚',
            self::CR => '哥斯达黎加',
            self::GD => '格林纳达',
            self::GL => '格陵兰',
            self::GE => '格鲁吉亚',
            self::GG => '根西岛',
            self::CU => '古巴',
            self::GP => '瓜德罗普',
            self::GU => '关岛',
            self::GY => '圭亚那',
            self::KZ => '哈萨克斯坦',
            self::HT => '海地',
            self::KR => '韩国',
            self::NL => '荷兰',
            self::BQ => '荷属加勒比区',
            self::SX => '荷属圣马丁',
            self::HM => '赫德岛和麦克唐纳群岛',
            self::ME => '黑山',
            self::HN => '洪都拉斯',
            self::KI => '基里巴斯',
            self::DJ => '吉布提',
            self::KG => '吉尔吉斯斯坦',
            self::GN => '几内亚',
            self::GW => '几内亚比绍',
            self::CA => '加拿大',
            self::GH => '加纳',
            self::GA => '加蓬',
            self::KH => '柬埔寨',
            self::CZ => '捷克',
            self::ZW => '津巴布韦',
            self::CM => '喀麦隆',
            self::QA => '卡塔尔',
            self::KY => '开曼群岛',
            self::CC => '科科斯（基林）群岛',
            self::KM => '科摩罗',
            self::CI => '科特迪瓦',
            self::KW => '科威特',
            self::HR => '克罗地亚',
            self::KE => '肯尼亚',
            self::CK => '库克群岛',
            self::CW => '库拉索',
            self::LV => '拉脱维亚',
            self::LS => '莱索托',
            self::LA => '老挝',
            self::LB => '黎巴嫩',
            self::LT => '立陶宛',
            self::LR => '利比里亚',
            self::LY => '利比亚',
            self::LI => '列支敦士登',
            self::RE => '留尼汪',
            self::LU => '卢森堡',
            self::RW => '卢旺达',
            self::RO => '罗马尼亚',
            self::MG => '马达加斯加',
            self::IM => '马恩岛',
            self::MV => '马尔代夫',
            self::MT => '马耳他',
            self::MW => '马拉维',
            self::MY => '马来西亚',
            self::ML => '马里',
            self::MH => '马绍尔群岛',
            self::MQ => '马提尼克',
            self::YT => '马约特',
            self::MU => '毛里求斯',
            self::MR => '毛里塔尼亚',
            self::US => '美国',
            self::UM => '美国本土外小岛屿',
            self::AS => '美属萨摩亚',
            self::VI => '美属维尔京群岛',
            self::MN => '蒙古',
            self::MS => '蒙特塞拉特',
            self::BD => '孟加拉国',
            self::PE => '秘鲁',
            self::FM => '密克罗尼西亚',
            self::MM => '缅甸',
            self::MD => '摩尔多瓦',
            self::MA => '摩洛哥',
            self::MC => '摩纳哥',
            self::MZ => '莫桑比克',
            self::MX => '墨西哥',
            self::NA => '纳米比亚',
            self::ZA => '南非',
            self::AQ => '南极洲',
            self::GS => '南乔治亚和南桑威奇群岛',
            self::SS => '南苏丹',
            self::NR => '瑙鲁',
            self::NI => '尼加拉瓜',
            self::NP => '尼泊尔',
            self::NE => '尼日尔',
            self::NG => '尼日利亚',
            self::NU => '纽埃',
            self::NO => '挪威',
            self::NF => '诺福克岛',
            self::PW => '帕劳',
            self::PN => '皮特凯恩群岛',
            self::PT => '葡萄牙',
            self::JP => '日本',
            self::SE => '瑞典',
            self::CH => '瑞士',
            self::SV => '萨尔瓦多',
            self::WS => '萨摩亚',
            self::RS => '塞尔维亚',
            self::SL => '塞拉利昂',
            self::SN => '塞内加尔',
            self::CY => '塞浦路斯',
            self::SC => '塞舌尔',
            self::SA => '沙特阿拉伯',
            self::BL => '圣巴泰勒米',
            self::CX => '圣诞岛',
            self::ST => '圣多美和普林西比',
            self::SH => '圣赫勒拿',
            self::KN => '圣基茨和尼维斯',
            self::LC => '圣卢西亚',
            self::SM => '圣马力诺',
            self::PM => '圣皮埃尔和密克隆群岛',
            self::VC => '圣文森特和格林纳丁斯',
            self::LK => '斯里兰卡',
            self::SK => '斯洛伐克',
            self::SI => '斯洛文尼亚',
            self::SJ => '斯瓦尔巴和扬马延',
            self::SZ => '斯威士兰',
            self::SD => '苏丹',
            self::SR => '苏里南',
            self::SB => '所罗门群岛',
            self::SO => '索马里',
            self::TJ => '塔吉克斯坦',
            self::TW => '台湾',
            self::TH => '泰国',
            self::TZ => '坦桑尼亚',
            self::TO => '汤加',
            self::TC => '特克斯和凯科斯群岛',
            self::TT => '特立尼达和多巴哥',
            self::TN => '突尼斯',
            self::TV => '图瓦卢',
            self::TR => '土耳其',
            self::TM => '土库曼斯坦',
            self::TK => '托克劳',
            self::WF => '瓦利斯和富图纳',
            self::VU => '瓦努阿图',
            self::GT => '危地马拉',
            self::VE => '委内瑞拉',
            self::BN => '文莱',
            self::UG => '乌干达',
            self::UA => '乌克兰',
            self::UY => '乌拉圭',
            self::UZ => '乌兹别克斯坦',
            self::ES => '西班牙',
            self::EH => '西撒哈拉',
            self::GR => '希腊',
            self::SG => '新加坡',
            self::NC => '新喀里多尼亚',
            self::NZ => '新西兰',
            self::HU => '匈牙利',
            self::SY => '叙利亚',
            self::JM => '牙买加',
            self::AM => '亚美尼亚',
            self::YE => '也门',
            self::IQ => '伊拉克',
            self::IR => '伊朗',
            self::IL => '以色列',
            self::IT => '意大利',
            self::IN => '印度',
            self::ID => '印度尼西亚',
            self::GB => '英国',
            self::VG => '英属维尔京群岛',
            self::IO => '英属印度洋领地',
            self::JO => '约旦',
            self::VN => '越南',
            self::ZM => '赞比亚',
            self::JE => '泽西岛',
            self::TD => '乍得',
            self::GI => '直布罗陀',
            self::CL => '智利',
            self::CF => '中非共和国',
            self::CN => '中国',
            self::MO => '中国澳门',
            self::HK => '中国香港',
        };
    }

    public function toLowerCase(): string
    {
        return strtolower($this->value);
    }
}
