using UnityEngine;
using System.Collections;

public class BackCatalog3 : MonoBehaviour {

    public GameObject BackCatalog3Object;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        BackCatalog3Object.SetActive(true);
    }

    public void disappear()
    {
        BackCatalog3Object.SetActive(false);
    }
}