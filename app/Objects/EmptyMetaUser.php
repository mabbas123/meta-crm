<?php

namespace App\Objects;

class EmptyMetaUser
{
    public $Login;
    //--- group
    public $Group;
    //--- certificate serial number
    public $CertSerialNumber;
    //--- MTEnUsersRights
    public $Rights;
    //--- client's MetaQuotes ID
    public $MQID;
    //--- registration datetime (filled by MT5)
    public $Registration;
    //--- last access datetime (filled by MT5)
    public $LastAccess;
    //--- last password change datetime (filled by MT5)
    public $LastPassChange;
    //--- last ip-address
    public $LastIP;
    //--- name
    public $Name;
    //--- company
    public $Company;
    //--- external system account (exchange, ECN, etc)
    public $Account;
    //--- country
    public $Country;
    //--- client language (WinAPI LANGID)
    public $Language;
    //--- identificator by client
    public $ClientID;
    //--- city
    public $City;
    //--- state
    public $State;
    //--- ZIP code
    public $ZipCode;
    //--- address
    public $Address;
    //--- phone
    public $Phone;
    //--- email
    public $Email;
    //--- additional ID
    public $ID;
    //--- additional status
    public $Status;
    //--- comment
    public $Comment;
    //--- color
    public $Color;
    //--- phone password
    public $PhonePassword;
    //--- leverage
    public $Leverage;
    //--- agent account
    public $Agent;
    //--- balance & credit
    public $Balance;
    public $Credit;
    //--- accumulated interest rate
    public $InterestRate;
    //--- accumulated daily and monthly commissions
    public $CommissionDaily;
    public $CommissionMonthly;
    //--- previous balance state
    public $BalancePrevDay;
    public $BalancePrevMonth;
    //--- previous equity state
    public $EquityPrevDay;
    //--- previous equity state month
    public $EquityPrevMonth;
    //--- external trade accounts
    public $TradeAccounts;
    //--- lead campaign
    public $LeadCampaign;
    //--- lead source
    public $LeadSource;
    //--- main password
    public $MainPassword;
    //--- invest password
    public $InvestPassword;
}
