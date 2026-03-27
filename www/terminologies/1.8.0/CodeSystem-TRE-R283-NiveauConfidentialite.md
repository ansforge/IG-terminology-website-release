# TRE_R283_NiveauConfidentialite - Terminologies de Santé v1.8.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TRE_R283_NiveauConfidentialite**

## CodeSystem: TRE_R283_NiveauConfidentialite 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://mos.esante.gouv.fr/NOS/TRE_R283-NiveauConfidentialite/FHIR/TRE-R283-NiveauConfidentialite | *Version*:20231215120000 | |
| Active as of 2023-12-15 | *Responsible:*Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:TRE_R283_NiveauConfidentialite |
| *Other Identifiers:*OID:1.2.250.1.213.1.1.4.344 | | |

 
Niveau de restriction d’accès 

 Cette terminologie de référence (CodeSystem) est référencé dans la définition de contenu des jeux de valeurs (ValueSet) suivants : 

* [JDV_J222_NiveauConfidentialite_ROR](ValueSet-JDV-J222-NiveauConfidentialite-ROR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TRE-R283-NiveauConfidentialite",
  "meta" : {
    "versionId" : "5",
    "lastUpdated" : "2025-07-02T18:17:12.386+00:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem"]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2018-12-14T12:00:00+01:00"
    }
  }],
  "url" : "https://mos.esante.gouv.fr/NOS/TRE_R283-NiveauConfidentialite/FHIR/TRE-R283-NiveauConfidentialite",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.1.4.344"
  }],
  "version" : "20231215120000",
  "name" : "TRE_R283_NiveauConfidentialite",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-12-15T12:00:00+01:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "Niveau de restriction d'accès",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FRA"
    }]
  }],
  "caseSensitive" : false,
  "content" : "complete",
  "property" : [{
    "code" : "dateValid",
    "description" : "date de validité d'un code concept",
    "type" : "dateTime"
  },
  {
    "code" : "dateMaj",
    "description" : "Date de mise à jour d'un code concept",
    "type" : "dateTime"
  },
  {
    "code" : "dateFin",
    "description" : "Date de fin d'exploitation d'un code concept",
    "type" : "dateTime"
  },
  {
    "code" : "deprecationDate",
    "uri" : "http://hl7.org/fhir/concept-properties#deprecationDate",
    "description" : "Date Concept was deprecated",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A property that indicates the status of the concept.",
    "type" : "code"
  },
  {
    "code" : "retirementDate",
    "uri" : "http://hl7.org/fhir/concept-properties#retirementDate",
    "description" : "Date Concept was retired",
    "type" : "dateTime"
  }],
  "concept" : [{
    "code" : "1",
    "display" : "Accès libre",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2018-12-14T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2018-12-14T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "2",
    "display" : "Accès restreint",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2018-12-14T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2018-12-14T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "3",
    "display" : "Accès très restreint",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2018-12-14T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2018-12-14T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  }]
}

```
